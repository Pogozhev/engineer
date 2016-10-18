<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_CommonAdmin {

    function action_adminpage()
    {
        $view = View::factory('/admin/adminpage.tpl');
        Helper_Common::init_roles($view);

        $projects = ORM::factory('Project')->find_all();

        $view
            ->set('link_to_projects', URL::base('http')."uploads/IME2015_Projects_and_Participants.xlsx")
            ->set('link_to_masters', URL::base('http')."uploads/IME2015_Masters_Applications.xlsx")
            ->set('projects', $projects);

        $this->response->body($view);
    }

    public function action_list()
    {
        //Создаём файл проектов и участников
        $teamed_arr = array(
            array(
                'Название проекта',
                'Фамилия',
                'Имя',
                'Отчество',
                'E-Mail',
                'Телефон',
                'Курс',
                'Название университета',
                'Название факультета',
                'Название группы',
                'Студент ЭТО',
                'Группа ЭТО',
                'Название школы',
                'Название класса',
            )
        );
        $lonelies_arr = array(
            array(
                'Фамилия',
                'Имя',
                'Отчество',
                'E-Mail',
                'Телефон',
                'Курс',
                'Название университета',
                'Название факультета',
                'Название группы',
                'Студент ЭТО',
                'Группа ЭТО',
                'Название школы',
                'Название класса',
                'Компетенции',
                'Интересы',
            )
        );
        $projects_arr = array(
            array(
                'Название проекта',
                'Описание проекта',
                'Секция',
            )
        );

        //Подготовим все проекты и их участников
        $projects = ORM::factory('Project')->find_all();
        foreach($projects as $project)
        {
            //Добавим в общий массив участников участников данного проекта
            $participants = $project->participants->find_all();
            foreach($participants as $participant)
            {
                //Финальный массив
                $tmp = $participant->as_array();

                //Получим и подготовим данные о месте обучения
                $is_university = $tmp['is_university'] == 1 ? true : false;

                //Университет
                $tmp_university = $is_university ?
                    $participant->university->as_array() :
                    array(
                        'course_id' => ' - ',
                        'university_title' => ' - ',
                        'institute_title' => ' - ',
                        'group_title' => ' - ',
                        'is_elit' => ' - ',
                        'elit_group_title' => ' - ',
                    );
                if($is_university)
                {
                    $tmp_university['course_id'] = $participant->university->course->title;
                    $tmp_university['is_elit'] = $tmp_university['is_elit'] == 1 ? 'Да' : 'Нет';
                }
                unset($tmp_university['id'], $tmp_university['participant_id']);

                //Школа
                $tmp_school = !$is_university ?
                    $participant->school->as_array() :
                    array(
                        'title' => '-',
                        'class' => '-',
                    );
                unset($tmp_school['id'], $tmp_school['participant_id']);

                //Сливаем, чистим от лишнего и добавляем в начало название доклада
                $tmp = array_merge($tmp, $tmp_university, $tmp_school);
                unset($tmp['id'], $tmp['user_id'], $tmp['has_project'], $tmp['project_id'], $tmp['is_university']);
                array_unshift($tmp, $project->title);

                //Добавляем финальный массив к общему массиву
                $teamed_arr[] = array_values($tmp);
            }

            //Массив данных данного проекта
            $tmp = $project->as_array();
            $tmp['branch_id'] = $project->branch->title;
            unset($tmp['id']);

            //Добавляем в общий массив
            $projects_arr[] = array_values($tmp);
        }

        $lonelies = ORM::factory('Participant')->where('has_project', '=', 0)->find_all();
        foreach($lonelies as $participant)
        {
            //Финальный массив
            $tmp = $participant->as_array();

            //Получим и подготовим данные о месте обучения
            $is_university = $tmp['is_university'] == 1 ? true : false;

            //Университет
            $tmp_university = $is_university ?
                $participant->university->as_array() :
                array(
                    'course_id' => ' - ',
                    'university_title' => ' - ',
                    'institute_title' => ' - ',
                    'group_title' => ' - ',
                    'is_elit' => ' - ',
                    'elit_group_title' => ' - ',
                );
            if($is_university)
            {
                $tmp_university['course_id'] = $participant->university->course->title;
                $tmp_university['is_elit'] = $tmp_university['is_elit'] == 1 ? 'Да' : 'Нет';
            }
            unset($tmp_university['id'], $tmp_university['participant_id']);

            //Школа
            $tmp_school = !$is_university ?
                $participant->school->as_array() :
                array(
                    'title' => '-',
                    'class' => '-',
                );
            unset($tmp_school['id'], $tmp_school['participant_id']);

            //Компетенции
            $tmp_competence = $participant->competence->as_array();
            unset($tmp_competence['id'], $tmp_competence['participant_id']);

            //Сливаем и чистим от лишнего
            $tmp = array_merge($tmp, $tmp_university, $tmp_school, $tmp_competence);
            unset($tmp['id'], $tmp['user_id'], $tmp['has_project'], $tmp['project_id'], $tmp['is_university']);

            //Добавляем финальный массив к общему массиву
            $lonelies_arr[] = array_values($tmp);
        }


        //Сохранение файла с участниками и проектами
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()
            ->setCreator('IME 2015')
            ->setTitle('IME 2015 Applications')
            ->setLastModifiedBy('IME 2015')
            ->setDescription('Файл участников и докладов конференции')
            ->setSubject('IME 2015 Applications');

        //Страница проектов
        $objWorkSheet = $objPHPExcel->getSheet(0);
        $objWorkSheet->setTitle('Проекты');
        $objWorkSheet->fromArray($projects_arr, ' ', 'A1');
        for ($col = ord('a'); $col <= ord('c'); $col++)
        {
            $objWorkSheet->getColumnDimension(chr($col))->setAutoSize(true);
        }
        $header = 'a1:c1';
        $objWorkSheet->getStyle($header)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('C6E5E1');
        $style = array(
            'font' => array('bold' => true,),
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
        );
        $objWorkSheet->getStyle($header)->applyFromArray($style);

        //Страница участников проектов
        $objWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'Участники проектов');
        $objPHPExcel->addSheet($objWorkSheet, 1);
        $objWorkSheet->setTitle('Участники проектов');
        $objWorkSheet->fromArray($teamed_arr, ' ', 'A1');
        for ($col = ord('a'); $col <= ord('n'); $col++)
        {
            $objWorkSheet->getColumnDimension(chr($col))->setAutoSize(true);
        }
        $header = 'a1:n1';
        $objWorkSheet->getStyle($header)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('C6E5E1');
        $style = array(
            'font' => array('bold' => true,),
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
        );
        $objWorkSheet->getStyle($header)->applyFromArray($style);

        //Страница одиночек
        $objWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'Участники-одиночки');
        $objPHPExcel->addSheet($objWorkSheet, 1);
        $objWorkSheet->setTitle('Участники-одиночки');
        $objWorkSheet->fromArray($lonelies_arr, ' ', 'A1');
        for ($col = ord('a'); $col <= ord('o'); $col++)
        {
            $objWorkSheet->getColumnDimension(chr($col))->setAutoSize(true);
        }
        $header = 'a1:o1';
        $objWorkSheet->getStyle($header)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('C6E5E1');
        $style = array(
            'font' => array('bold' => true,),
            'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
        );
        $objWorkSheet->getStyle($header)->applyFromArray($style);

        //Создаём файл
        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $writer->setIncludeCharts(true);
        $writer->save('uploads/IME2015_Projects_and_Participants.xlsx');


        //Создаём файл для записавшихся на мастер-классы
        $masters_arr = array(
            array(
                'Фамилия',
                'Имя',
                'Отчество',
                'E-Mail',
                'Курс',
                'Название проекта'
            )
        );

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()
            ->setCreator('IME 2015')
            ->setTitle('IME 2015 Masters')
            ->setLastModifiedBy('IME 2015')
            ->setDescription('Файл записавшихся на мастер-классы')
            ->setSubject('IME 2015 Masters');

        $is_not_first_sheet = false;
        $masters = ORM::factory('Master')->find_all();
        foreach($masters as $master)
        {
            //Свой массив для каждого мастер-класса
            $current_masters_arr = $masters_arr;

            //Составляем строку со временем и названием, записываем название в строку
            $dates = date( 'd M H.i', $master->unixtime_begin) . '-' . date( 'H.i', $master->unixtime_end);
            $full_title = $dates . '. ' . $master->title;
            array_unshift($current_masters_arr, array('','','','','',$full_title));

            //Составим список записавшихся
            $participants = $master->participants->find_all();
            foreach($participants as $participant)
            {
                //Составляем массив данных для одного участника и записываем в общий массив
                $tmp = array(
                    'last_name' => $participant->last_name,
                    'first_name' => $participant->first_name,
                    'middle_name' => $participant->middle_name,
                    'email' => $participant->email,
                    'course' => $participant->is_university == 1 ? $participant->university->course->title : '-',
                    'project_title' => $participant->has_project == 1 ? $participant->project->title : '-',
                );
                $current_masters_arr[] = array_values($tmp);
            }

            //Для каждого мастер-класса своя страничка в файле
            if(!$is_not_first_sheet)
            {
                $objWorkSheet = $objPHPExcel->getSheet(0);
                $is_not_first_sheet = true;
            }
            else
            {
                $objWorkSheet = new PHPExcel_Worksheet($objPHPExcel, $dates);
                $objPHPExcel->addSheet($objWorkSheet, 1);
            }

            $objWorkSheet->setTitle($dates);
            $objWorkSheet->fromArray($current_masters_arr, ' ', 'A1');
            for ($col = ord('a'); $col <= ord('f'); $col++)
            {
                $objWorkSheet->getColumnDimension(chr($col))->setAutoSize(true);
            }
            $header = 'a2:f2';
            $objWorkSheet->getStyle($header)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('C6E5E1');
            $style = array(
                'font' => array('bold' => true,),
                'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
            );
            $objWorkSheet->getStyle($header)->applyFromArray($style);
            $title =  'a1:f1';
            $objWorkSheet->getStyle($title)->applyFromArray($style);
        }

        //Создаём файл
        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $writer->setIncludeCharts(true);
        $writer->save('uploads/IME2015_Masters_Applications.xlsx');


        //Возвращаемся на страницу админки
        $this->redirect($this->request->referrer());
    }

    public function action_delete_idea()
    {
        $idea_id = $this->request->query('idea_id');
        $idea = ORM::factory('Idea')
            ->where('id', '=', $idea_id)
            ->find()
            ->delete();

        $this->redirect($this->request->referrer());
    }

    public function action_delete_project()
    {
        $project_id = $this->request->query('project_id');
        $project = ORM::factory('Project')
            ->where('id', '=', $project_id)
            ->find();

        Helper_Common::delete_project($project);

        $this->redirect($this->request->referrer());
    }

    public function action_technical()
    {


        //Меняли регистрацию с проектной на личную
        /*$participants = ORM::factory('Participant')->find_all();
        foreach($participants as $participant)
        {
            $user = ORM::factory('User', array('email'=>$participant->email));
            $participant->set('user', $user)->save();
        }

        $participants = ORM::factory('Participant')->find_all();
        foreach($participants as $participant)
            $participant_emails[] = $participant->email;
        $odd_users = ORM::factory('User')
            ->where('email', 'NOT IN', $participant_emails)
            ->find_all();
        foreach($odd_users as $user)
            $user->delete();

        $users = ORM::factory('User')->find_all();
        foreach($users as $user)
        {
            $participants = ORM::factory('Participant')->where('user_id', '=', $user->id)->find_all()->as_array();
            if(count($participants) > 1)
                for($i=1; $i<count($participants); $i++)
                    $participants[$i]->delete();
        }

        $universities = ORM::factory('Participant_University')->find_all();
        foreach($universities as $university)
        {
            $participant = $university->participant;
            if(!$participant->loaded())
                $university->delete();
        }*/

        var_dump('Hello there! I am a technical page. I have probably done something.');
    }
}
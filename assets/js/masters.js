$(document).ready(function($) {

    var styleIntersecting = "master-intersecting";
    var styleFull = "master-full";

    var $forms = $('.masters_form');


    $forms.each(function() {
        var $master1 = $(this).find('#master1_id'),
            $master2 = $(this).find('#master2_id'),
            $master3 = $(this).find('#master3_id'),
            $master4 = $(this).find('#master4_id'),
            $master5 = $(this).find('#master5_id');

        var $masters_array = [$master1, $master2, $master3, $master4, $master5];

        var $m1_options = $master1.children('option'),
            $m2_options = $master2.children('option'),
            $m3_options = $master3.children('option'),
            $m4_options = $master4.children('option'),
            $m5_options = $master5.children('option');

        $master1.on('change', function() {
            setblocks($masters_array, $master1, $m1_options);
            setblocks($masters_array, $master2, $m2_options);
            setblocks($masters_array, $master3, $m3_options);
            setblocks($masters_array, $master4, $m4_options);
            setblocks($masters_array, $master5, $m5_options);
        });

        $master2.on('change', function() {
            setblocks($masters_array, $master1, $m1_options);
            setblocks($masters_array, $master2, $m2_options);
            setblocks($masters_array, $master3, $m3_options);
            setblocks($masters_array, $master4, $m4_options);
            setblocks($masters_array, $master5, $m5_options);
        });

        $master3.on('change', function() {
            setblocks($masters_array, $master1, $m1_options);
            setblocks($masters_array, $master2, $m2_options);
            setblocks($masters_array, $master3, $m3_options);
            setblocks($masters_array, $master4, $m4_options);
            setblocks($masters_array, $master5, $m5_options);
        });

        $master4.on('change', function() {
            setblocks($masters_array, $master1, $m1_options);
            setblocks($masters_array, $master2, $m2_options);
            setblocks($masters_array, $master3, $m3_options);
            setblocks($masters_array, $master4, $m4_options);
            setblocks($masters_array, $master5, $m5_options);
        });

        $master5.on('change', function() {
            setblocks($masters_array, $master1, $m1_options);
            setblocks($masters_array, $master2, $m2_options);
            setblocks($masters_array, $master3, $m3_options);
            setblocks($masters_array, $master4, $m4_options);
            setblocks($masters_array, $master5, $m5_options);
        });
        setblocks($masters_array, $master1, $m1_options);
        setblocks($masters_array, $master2, $m2_options);
        setblocks($masters_array, $master3, $m3_options);
        setblocks($masters_array, $master4, $m4_options);
        setblocks($masters_array, $master5, $m5_options);
    });

    function is_intersecting(begin1, end1, begin2, end2)
    {
        return ((end1 > begin2 && end1 < end2) || (end2 > begin1 && end2 < end1) || (begin1 == begin2));
    }

    function setblocks($masters_array, $master, $m_options)
    {
        $m_options.each(function() {
            var left = $(this).data('left');

            $(this).prop('disabled', false);
            $(this).removeClass(styleIntersecting);
            $(this).removeClass(styleFull);

            if(left <= 0 && !$(this).is(':selected'))
            {
                $(this).prop('disabled', true);
                $(this).removeClass(styleIntersecting);
                $(this).addClass(styleFull);
            }

            $masters_array.forEach(function(item, i, arr) {
                if($master != item)
                {
                    crosscheck(item, $master, $m_options);
                }
            });
        });
    }

    function crosscheck($master1, $master2, $m2_options)
    {
        var $selected1 = $master1.find(':selected'),
            val1 = $selected1.val(),
            begin1 = $selected1.data('begin'),
            end1 = $selected1.data('end');

        $m2_options.each(function() {
            var val2 = $(this).val(),
                begin2 = $(this).data('begin'),
                end2 = $(this).data('end');

            var isi = is_intersecting(begin1, end1, begin2, end2);

            if(val1 != 0 && (isi || val1 == val2))
            {
                $(this).prop('disabled', true);
                $(this).addClass(styleIntersecting);
            }
        });
    }

    $('.formbtn').each(function() {
        $(this).on('click', function(){
            $('#form' + $(this).data('pid')).submit();
        });
    });
});


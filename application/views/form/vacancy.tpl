<link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
<div class="collapse vacancy" data-id="vid">
    <h4>
        &#10149; Вакансия
        <button type="button" class="btn-xs btn-success add_vacancy[vid] addb" style="margin-bottom: 7px">Добавить вакансию</button>
    </h4>

    <div class="input-group col-md-12">
        <label class="col-md-6" for="vacancy_title[vid]">Название вакансии*</label>
        <div class="col-md-2 col-md-offset-4">
            <button type="button" tabindex="-1" class="btn-xs btn-danger remb" id="remove_vacancy[vid]">Удалить</button>
        </div>
        <div class="col-md-12">
            <input
                    id="vacancy_title[vid]"
                    name="vacancy_title[vid]"
                    type="text"
                    class="form-control val-required"
                    maxlength="40">
        </div>

    </div>
    <div class="input-group col-md-12">
        <label class="col-md-12" for="vacancy_description[vid]">Описание вакансии*</label>
        <textarea id="vacancy_description[vid]" name="vacancy_description[vid]" class="form-control val-required"></textarea>
    </div>

    <label for="tags">Подберите категории/ключевые слова к вакансии (или введите свои):</label>
    <div class="input-group col-md-12">
        <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
            {foreach $tags as $tag}
                <option value="{$tag->name}">{$tag->name}</option>
            {/foreach}
        </select>
    </div>
</div>

<script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/assets/js/register.js" type="text/javascript"></script>
<script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>




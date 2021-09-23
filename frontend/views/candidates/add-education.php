<section class="edu" data-index="eduIndex">
    <br>
    <div class="form-group">
        <label class="control-label">Degree</label>
        <div class="form-group field-education-degree required">
            <input type="text" id="education-degree" class="form-control" name="<?= 'Education[eduIndex][degree]' ?>" placeholder="Degree, e.g. Bachelor" aria-required="true">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Field of Study</label>
        <div class="form-group field-education-field_of_study required">
            <input type="text" id="education-field_of_study" class="form-control" name="<?= 'Education[eduIndex][field_of_study]' ?>" placeholder="Major, e.g. Computer Science" aria-required="true">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Educational institution</label>
        <div class="form-group field-education-educational_institution required">
            <input type="text" id="education-educational_institution" class="form-control" name="<?= 'Education[eduIndex][educational_institution]' ?>" placeholder="Educational institution name, e.g. Massachusetts Institute of Technology" aria-required="true">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">From</label>
                <div class="form-group field-education-year_from required">
                    <input type="text" id="education-year_from" class="form-control" name="<?= 'Education[eduIndex][year_from]' ?>" placeholder="e.g. 2014" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">To</label>
                <div class="form-group field-education-year_to required">
                    <input type="text" id="education-year_to" class="form-control" name="<?= 'Education[eduIndex][year_to]' ?>" placeholder="e.g. 2020" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Description</label>
        <div class="form-group field-education-description">
            <textarea id="education-description" class="form-control" name="<?= 'Education[eduIndex][description]' ?>" rows="7"></textarea>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="add-post-btn educations-container">
        <button class="float-left add-education-form-button">
            <i class="ti-plus"></i> Add New Education
        </button>
        <button class="float-right remove-education-form-button" data-index="eduIndex">
            <i class="ti-trash"></i> Delete This
        </button>
    </div>
</section>
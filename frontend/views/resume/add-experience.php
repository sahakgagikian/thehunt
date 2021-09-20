<section class="exp" data-index="expIndex">
    <br>
    <div class="form-group">
        <label class="control-label">Company Name</label>
        <div class="form-group field-experience-company_name required">
            <input type="text" id="experience-company_name" class="form-control" name="Experience[expIndex][company_name]" placeholder="Company name" aria-required="true">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Title</label>
        <div class="form-group field-experience-title required">
            <input type="text" id="experience-title" class="form-control" name="Experience[expIndex][title]" placeholder="e.g. UI/UX Researcher" aria-required="true">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Date Form</label>
                <div class="form-group field-experience-year_from required">
                    <input type="text" id="experience-year_from" class="form-control" name="Experience[expIndex][year_from]" placeholder="e.g. 2014" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">Date To</label>
                <div class="form-group field-experience-year_to required">
                    <input type="text" id="experience-year_to" class="form-control" name="Experience[expIndex][year_to]" placeholder="e.g. 2020" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Description</label>
        <div class="form-group field-experience-description">
            <textarea id="experience-description" class="form-control" name="Experience[expIndex][description]" rows="7"></textarea>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="add-post-btn experiences-container">
        <button class="float-left add-experience-form-button">
            <i class="ti-plus"></i> Add New Experience
        </button>
        <button class="float-right remove-experience-form-button" data-index="expIndex">
            <i class="ti-trash"></i> Delete This
        </button>
    </div>
</section>
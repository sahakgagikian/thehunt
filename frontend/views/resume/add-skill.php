<section class="skill" data-index="skillIndex">
    <br>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Skill Name</label>
                <div class="form-group field-skill-name required">
                    <input type="text" id="skill-name" class="form-control" name="Skill[skillIndex][name]" placeholder="Skill name, e.g. HTML" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">% (1-100)</label>
                <div class="form-group field-skill-proficiency required">
                    <input type="text" id="skill-proficiency" class="form-control" name="Skill[skillIndex][proficiency]" placeholder="Skill proficiency, e.g. 90" aria-required="true">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-post-btn skills-container">
        <button class="float-left add-skill-form-button">
            <i class="ti-plus"></i> Add New Skill
        </button>
        <button class="float-right remove-skill-form-button" data-index="skillIndex">
            <i class="ti-trash"></i> Delete This
        </button>
    </div>
</section>
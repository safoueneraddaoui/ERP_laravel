<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('Parametre de site') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('logo') }}</label><br>
                        <input id="logo" name="logo" class="d-none" type="file" onchange="changePreview(this);">
                        <label for="logo">
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <div class="avatar avatar-xl">
                                        <img id="file-prev" src="{{ asset(get_system_setting('application_logo')) }}" class="avatar-img rounded">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a class="btn btn-sm btn-light choose-button">{{ __('choisir Logo') }}</a>
                                </div>
                            </div>
                        </label> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>{{ __('favicon') }}</label><br>
                        <input id="favicon" name="favicon" class="d-none" type="file" onchange="changePreview(this);">
                        <label for="favicon">
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <div class="avatar avatar-xl">
                                        <img id="file-prev" src="{{ asset(get_system_setting('application_favicon')) }}" class="avatar-img rounded">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a class="btn btn-sm btn-light choose-button">{{ __('choisir  Favicon') }}</a>
                                </div>
                            </div>
                        </label> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group required">
                        <label for="application_name">{{ __('Nom du Site') }}</label>
                        <input name="application_name" type="text" class="form-control" placeholder="{{ __('Nom du Site') }}" value="{{ get_system_setting('application_name') }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group required">
                        <label for="meta_description">{{ __('Description') }}</label>
                        <input name="meta_description" type="text" class="form-control" placeholder="{{ __('Description') }}" value="{{ get_system_setting('meta_description') }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group required">
                        <label for="meta_keywords">{{ __('Mots cles') }}</label>
                        <input name="meta_keywords" type="text" class="form-control" placeholder="{{ __('Mots cles') }}" value="{{ get_system_setting('meta_keywords') }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group text-center mt-5">
                <button class="btn btn-primary save_form_button">{{ __('Enregistrer') }}</button>
            </div>
        </div>
    </div>
</div>






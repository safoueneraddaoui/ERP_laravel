<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('Information') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="hero_title">{{ __('titre') }}</label>
                        <input name="hero_title" type="text" class="form-control" placeholder="{{ __('titre') }}" value="{{ get_theme_setting('bikin', 'hero_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="hero_description">{{ __('description') }}</label>
                        <input name="hero_description" type="text" class="form-control" placeholder="{{ __('description') }}" value="{{ get_theme_setting('bikin', 'hero_description') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('A_propos') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_title">{{ __('titre') }}</label>
                        <input name="about_title" type="text" class="form-control" placeholder="{{ __('titre') }}" value="{{ get_theme_setting('bikin', 'about_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_description">{{ __('description') }}</label>
                        <input name="about_description" type="text" class="form-control" placeholder="{{ __('description') }}" value="{{ get_theme_setting('bikin', 'about_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_1_title">{{ __('titre_1') }}</label>
                        <input name="about_1_title" type="text" class="form-control" placeholder="{{ __('titre_1') }}" value="{{ get_theme_setting('bikin', 'about_1_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_1_description">{{ __('description_1') }}</label>
                        <input name="about_1_description" type="text" class="form-control" placeholder="{{ __('description_1') }}" value="{{ get_theme_setting('bikin', 'about_1_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_2_title">{{ __('titre_2') }}</label>
                        <input name="about_2_title" type="text" class="form-control" placeholder="{{ __('titre_2') }}" value="{{ get_theme_setting('bikin', 'about_2_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_2_description">{{ __('description_2') }}</label>
                        <input name="about_2_description" type="text" class="form-control" placeholder="{{ __('description_2') }}" value="{{ get_theme_setting('bikin', 'about_2_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_3_title">{{ __('titre_3') }}</label>
                        <input name="about_3_title" type="text" class="form-control" placeholder="{{ __('titre_3') }}" value="{{ get_theme_setting('bikin', 'about_3_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_3_description">{{ __('description_3') }}</label>
                        <input name="about_3_description" type="text" class="form-control" placeholder="{{ __('description_3') }}" value="{{ get_theme_setting('bikin', 'about_3_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_4_title">{{ __('titre_4') }}</label>
                        <input name="about_4_title" type="text" class="form-control" placeholder="{{ __('titre_4') }}" value="{{ get_theme_setting('bikin', 'about_4_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="about_4_description">{{ __('description_4') }}</label>
                        <input name="about_4_description" type="text" class="form-control" placeholder="{{ __('description_4') }}" value="{{ get_theme_setting('bikin', 'about_4_description') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('features_information') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-12">
                    <div class="form-group">
                    <select name="features_active" class="form-control">
                            <option value="0" {{ $item->value == false ? 'selected' : '' }}>{{ __('Ne pas afficher') }}</option>
                            <option value="1" {{ $item->value == true  ? 'selected' : '' }}>{{ __('Afficher') }}</option>
                        </select>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_title">{{ __('titre') }}</label>
                        <input name="features_title" type="text" class="form-control" placeholder="{{ __('titre') }}" value="{{ get_theme_setting('bikin', 'features_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_description">{{ __('description') }}</label>
                        <input name="features_description" type="text" class="form-control" placeholder="{{ __('description') }}" value="{{ get_theme_setting('bikin', 'features_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_1_title">{{ __('titre_1') }}</label>
                        <input name="features_1_title" type="text" class="form-control" placeholder="{{ __('titre_1') }}" value="{{ get_theme_setting('bikin', 'features_1_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_1_description">{{ __('description_1') }}</label>
                        <input name="features_1_description" type="text" class="form-control" placeholder="{{ __('description_1') }}" value="{{ get_theme_setting('bikin', 'features_1_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_2_title">{{ __('titre_2') }}</label>
                        <input name="features_2_title" type="text" class="form-control" placeholder="{{ __('titre_2') }}" value="{{ get_theme_setting('bikin', 'features_2_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_2_description">{{ __('description_2') }}</label>
                        <input name="features_2_description" type="text" class="form-control" placeholder="{{ __('description_2') }}" value="{{ get_theme_setting('bikin', 'features_2_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_3_title">{{ __('titre_3') }}</label>
                        <input name="features_3_title" type="text" class="form-control" placeholder="{{ __('titre_3') }}" value="{{ get_theme_setting('bikin', 'features_3_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_3_description">{{ __('description_3') }}</label>
                        <input name="features_3_description" type="text" class="form-control" placeholder="{{ __('description_3') }}" value="{{ get_theme_setting('bikin', 'features_3_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_4_title">{{ __('titre_4') }}</label>
                        <input name="features_4_title" type="text" class="form-control" placeholder="{{ __('titre_4') }}" value="{{ get_theme_setting('bikin', 'features_4_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="features_4_description">{{ __('description_4') }}</label>
                        <input name="features_4_description" type="text" class="form-control" placeholder="{{ __('description_4') }}" value="{{ get_theme_setting('bikin', 'features_4_description') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('Services') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_title">{{ __('titre') }}</label>
                        <input name="services_title" type="text" class="form-control" placeholder="{{ __('services_title') }}" value="{{ get_theme_setting('bikin', 'services_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_description">{{ __('description') }}</label>
                        <input name="services_description" type="text" class="form-control" placeholder="{{ __('description') }}" value="{{ get_theme_setting('bikin', 'services_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_1_title">{{ __('titre_1') }}</label>
                        <input name="services_1_title" type="text" class="form-control" placeholder="{{ __('titre_1') }}" value="{{ get_theme_setting('bikin', 'services_1_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_1_description">{{ __('description_1') }}</label>
                        <input name="services_1_description" type="text" class="form-control" placeholder="{{ __('description_1') }}" value="{{ get_theme_setting('bikin', 'services_1_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_2_title">{{ __('titre_2') }}</label>
                        <input name="services_2_title" type="text" class="form-control" placeholder="{{ __('titre_2') }}" value="{{ get_theme_setting('bikin', 'services_2_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_2_description">{{ __('description_2') }}</label>
                        <input name="services_2_description" type="text" class="form-control" placeholder="{{ __('description_2') }}" value="{{ get_theme_setting('bikin', 'services_2_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_3_title">{{ __('titre_3') }}</label>
                        <input name="services_3_title" type="text" class="form-control" placeholder="{{ __('titre_3') }}" value="{{ get_theme_setting('bikin', 'services_3_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_3_description">{{ __('description_3') }}</label>
                        <input name="services_3_description" type="text" class="form-control" placeholder="{{ __('description_3') }}" value="{{ get_theme_setting('bikin', 'services_3_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_4_title">{{ __('titre_4') }}</label>
                        <input name="services_4_title" type="text" class="form-control" placeholder="{{ __('titre_4') }}" value="{{ get_theme_setting('bikin', 'services_4_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="services_4_description">{{ __('description_4') }}</label>
                        <input name="services_4_description" type="text" class="form-control" placeholder="{{ __('description_4') }}" value="{{ get_theme_setting('bikin', 'services_4_description') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('Faq') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_1_title">{{ __('titre_1') }}</label>
                        <input name="faq_1_title" type="text" class="form-control" placeholder="{{ __('titre_1') }}" value="{{ get_theme_setting('bikin', 'faq_1_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_1_description">{{ __('description_1') }}</label>
                        <input name="faq_1_description" type="text" class="form-control" placeholder="{{ __('description_1') }}" value="{{ get_theme_setting('bikin', 'faq_1_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_2_title">{{ __('titre_2') }}</label>
                        <input name="faq_2_title" type="text" class="form-control" placeholder="{{ __('titre_2') }}" value="{{ get_theme_setting('bikin', 'faq_2_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_2_description">{{ __('description_2') }}</label>
                        <input name="faq_2_description" type="text" class="form-control" placeholder="{{ __('description_2') }}" value="{{ get_theme_setting('bikin', 'faq_2_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_3_title">{{ __('titre_3') }}</label>
                        <input name="faq_3_title" type="text" class="form-control" placeholder="{{ __('titre_3') }}" value="{{ get_theme_setting('bikin', 'faq_3_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_3_description">{{ __('description_3') }}</label>
                        <input name="faq_3_description" type="text" class="form-control" placeholder="{{ __('description_3') }}" value="{{ get_theme_setting('bikin', 'faq_3_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_4_title">{{ __('titre_4') }}</label>
                        <input name="faq_4_title" type="text" class="form-control" placeholder="{{ __('titre_4') }}" value="{{ get_theme_setting('bikin', 'faq_4_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_4_description">{{ __('description_4') }}</label>
                        <input name="faq_4_description" type="text" class="form-control" placeholder="{{ __('description_4') }}" value="{{ get_theme_setting('bikin', 'faq_4_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_5_title">{{ __('titre_5') }}</label>
                        <input name="faq_5_title" type="text" class="form-control" placeholder="{{ __('titre_5') }}" value="{{ get_theme_setting('bikin', 'faq_5_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_5_description">{{ __('description_5') }}</label>
                        <input name="faq_5_description" type="text" class="form-control" placeholder="{{ __('description_5') }}" value="{{ get_theme_setting('bikin', 'faq_5_description') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_6_title">{{ __('titre_6') }}</label>
                        <input name="faq_6_title" type="text" class="form-control" placeholder="{{ __('titre_6') }}" value="{{ get_theme_setting('bikin', 'faq_6_title') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="faq_6_description">{{ __('description_6') }}</label>
                        <input name="faq_6_description" type="text" class="form-control" placeholder="{{ __('description_6') }}" value="{{ get_theme_setting('bikin', 'faq_6_description') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ get_theme_setting('bikin', 'contact_title') }}</strong></p>
            <input name="contact_title" type="text" class="form-control" placeholder="{{ __('contact_title') }}" value="{{ get_theme_setting('bikin', 'contact_title') }}" />
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="contact_address">{{ get_theme_setting('bikin', 'contact_address_title') }}</label>
                        <input name="contact_address" type="text" class="form-control" placeholder="{{ __('contact_address_title') }}" value="{{ get_theme_setting('bikin', 'contact_address_title') }}">
                        <input name="contact_address" type="text" class="form-control" placeholder="{{ __('Addresse') }}" value="{{ get_theme_setting('bikin', 'contact_address') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="contact_email">{{ get_theme_setting('bikin', 'contact_email_title') }}</label>
                        <input name="contact_email" type="text" class="form-control" placeholder="{{ __('contact_email_title') }}" value="{{ get_theme_setting('bikin', 'contact_email_title') }}">
                        <input name="contact_email" type="text" class="form-control" placeholder="{{ __('Email') }}" value="{{ get_theme_setting('bikin', 'contact_email') }}">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="contact_phone">{{ get_theme_setting('bikin', 'contact_phone_title') }}</label>
                        <input name="contact_phone" type="text" class="form-control" placeholder="{{ __('contact_phone_title') }}" value="{{ get_theme_setting('bikin', 'contact_phone_title') }}">
                        <input name="contact_phone" type="text" class="form-control" placeholder="{{ __('Tel') }}" value="{{ get_theme_setting('bikin', 'contact_phone') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-4 card-body">
            <p><strong class="headings-color">{{ __('Media_sociaux') }}</strong></p>
        </div>
        <div class="col-lg-8 card-form__body card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="social_twitter_link">{{ __('Twitter') }}</label>
                        <input name="social_twitter_link" type="text" class="form-control" placeholder="{{ __('lien_twitter') }}" value="{{ get_theme_setting('bikin', 'social_twitter_link') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="social_facebook_link">{{ __('Facebook') }}</label>
                        <input name="social_facebook_link" type="text" class="form-control" placeholder="{{ __('lien_facebook') }}" value="{{ get_theme_setting('bikin', 'social_facebook_link') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="social_instagram_link">{{ __('Instagram') }}</label>
                        <input name="social_instagram_link" type="text" class="form-control" placeholder="{{ __('lien_instagram') }}" value="{{ get_theme_setting('bikin', 'social_instagram_link') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="social_linkedin_link">{{ __('Linkedin') }}</label>
                        <input name="social_linkedin_link" type="text" class="form-control" placeholder="{{ __('lien_linkedin') }}" value="{{ get_theme_setting('bikin', 'social_linkedin_link') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
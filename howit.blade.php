@extends('main.basic')
@section('content')

<div class="feature-content">
    <div class="container">
    <div class="div-block-34">
        <a href="{{route('home')}}" class="back-button w-button custom-float-left"></a>
    </div>
    </div>

    <div class="container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs mt-5">
        <div class="tabs-menu-3 w-tab-menu">
            <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
                <div class="paragraph-4">Overall Flow</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-1 w-inline-block w-tab-link">
                <div class="paragraph-4">Cloud Service</div>
            </a>
            <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                <div class="paragraph-4">On Site Deployment</div>
            </a>
            <a data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link">
                <div class="paragraph-4">API Integration</div>
            </a>
        </div>
        <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
                <div class="div-block-27"><img src="{{asset('/image/CMJ03.webp')}}"
                        alt="" class="image-26"></div>
                <div class="div-block-26">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-OF-SHL-Text') }}</div>
                    <div class="headline-2">{{ trans('how-it-work.HIW-OF-HL-Title') }}</div>
                    <p class="paragraph-2 ">{{ trans('how-it-work.HIW-OF-ST-Text') }}</p>
                </div>

                    <div class="div-block-27"><img src="{{asset('/image/CMJ05.webp')}}"
                        alt="" class=""></div>
                <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OF1-HL-Title') }}</div>
                        <div class="headline headline-features mr-4">{{ trans('how-it-work.HIW-OF1-SHL-Text') }}</div>
                        <p class="paragraph-2 text-align-right">{{ trans('how-it-work.HIW-OF1-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/EasytoUseapp.webp')}}"
                            alt="" class="image-feature"></div>
                </div>
                <div class="feature-exp even w-row">
                    <div class="column-34 w-col w-col-6"><img src="{{asset('/image/FastIntegration.webp')}}"
                            alt="" class="image-feature"></div>
                    <div class="column-35 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OF2-HL-Title') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-OF2-SHL-Text') }}</div>
                        <p class="paragraph-2">{{ trans('how-it-work.HIW-OF2-ST-Text') }}</p>
                    </div>
                </div>
                <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OF3-HL-Title') }}</div>
                        <div class="headline headline-features mr-4">{{ trans('how-it-work.HIW-OF3-SHL-Text') }}</div>
                        <p class="paragraph-2 text-align-right">{{ trans('how-it-work.HIW-OF3-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/lowCost.webp')}}"
                            alt="" class="image-feature"></div>
                </div>
                <div class="feature-exp even w-row">
                    <div class="column-34 w-col w-col-6"><img src="{{asset('/image/onCloudReady.webp')}}"
                            alt="" class="image-feature"></div>
                    <div class="column-35 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OF4-HL-Title') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-OF4-SHL-Text') }}</div>
                        <p class="paragraph-2">{{ trans('how-it-work.HIW-OF4-ST-Text') }}</p>
                    </div>
                </div>

                <div class="div-block-29">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-OF-SF-SHL') }}</div>
                    <div class="w-layout-grid grid-2">
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/AdaptableCustom.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OF-SF1-Title') }}</div>
                                <div class="cardparagraph fix-tablet-distance">
                                    {{ trans('how-it-work.HIW-OF-SF1-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img
                                    src="{{asset('/image/UpdateableFeature.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader-2">{{ trans('how-it-work.HIW-OF-SF2-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-OF-SF2-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/lowCost.webp')}}" alt="" class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OF-SF3-Title') }}</div>
                                <div class="cardparagraph fix-tablet-distance">
                                    {{ trans('how-it-work.HIW-OF-SF3-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/MasaDevelop.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OF-SF4-Title') }}</div>
                                <div class="cardparagraph fix-tablet-distance">
                                    {{ trans('how-it-work.HIW-OF-SF4-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/OperasionalSupport.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OF-SF5-Title') }}</div>
                                <div class="cardparagraph fix-tablet-distance">
                                    {{ trans('how-it-work.HIW-OF-SF5-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div class="columns-4 w-row">
                                <div class="w-col w-col-4">
                                    <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="email" id="email">
                                </div>
                            </div>
                            <div class="w-row w-100">
                                <div class="w-col w-col-12">
                                    <label for="email-6" class="field-label text-align-left">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                                    <input type="submit" data-wait="Please wait..." class="submit-button w-button float-right">
                                </div>
                            </div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="form-block hide-mobile w-form">
                        <form id="contactItSolution" class="form-2  hide-mobile" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div>
                                <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                            </div>
                            <div>
                                <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                            </div>
                            <div>
                                <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                <input type="text" class="text-field-2 w-input" name="email" id="email">
                            </div>
                            <label for="email-6" class="field-label-4">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                            <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                            <input type="submit" data-wait="Please wait..." class="submit-button w-button">
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane">
                <div class="div-block-27"><img src="{{asset('/image/CMJ07.webp')}}"
                        alt="" class="image-26"></div>
                <div class="div-block-26">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-CS-SHL-Text') }}</div>
                    <div class="headline-2">{{ trans('how-it-work.HIW-CS-HL-Title') }}</div>
                    <p class="paragraph-2">{{ trans('how-it-work.HIW-CS-ST-Text') }}</p>
                </div>
                                <div class="div-block-27"><img src="{{asset('/image/CMJ10.webp')}}"
                        alt="" class=""></div>
                <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-CS1-SHL-Text') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-CS1-HL-Title') }}</div>
                        <p class="paragraph-5">{{ trans('how-it-work.HIW-CS1-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/CMJ08.webp')}}"
                            alt="" class="image-feature"></div>
                </div>
                <div class="feature-exp even w-row">
                    <div class="column-34 w-col w-col-6"><img src="{{asset('/image/CMJ09.webp')}}"
                            alt="" class="image-feature"></div>
                    <div class="column-35 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-CS2-SHL-Text') }}</div>
                        <div class="headline headline-features ml-0">{{ trans('how-it-work.HIW-CS2-HL-Title') }}</div>
                        <p class="paragraph-5 text-align-left">{{ trans('how-it-work.HIW-CS2-ST-Text') }}</p>
                    </div>
                </div>

                <div class="div-block-29">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-CS-FL-SHL') }}</div>
                    <div class="w-layout-grid grid-2">
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/TidakMemerlukan.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-CS-FL1-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-CS-FL1-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img
                                    src="{{asset('/image/ClientCUkup.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader-2">{{ trans('how-it-work.HIW-CS-FL2-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-CS-FL2-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/SistemBerjalan.webp')}}"
                                    alt="" class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-CS-FL3-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-CS-FL3-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/HargaCenderung.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-CS-FL4-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-CS-FL4-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution2" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div class="columns-4 w-row">
                                <div class="w-col w-col-4">
                                    <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="email" id="email">
                                </div>
                            </div>
                            <div class="w-row w-100">
                                <div class="w-col w-col-12">
                                    <label for="email-6" class="field-label text-align-left">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                                    <input type="submit" data-wait="Please wait..." class="submit-button w-button float-right">
                                </div>
                            </div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="form-block hide-mobile w-form">
                        <form id="contactItSolution2" class="form-2  hide-mobile" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div>
                                <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                            </div>
                            <div>
                                <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                            </div>
                            <div>
                                <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                <input type="text" class="text-field-2 w-input" name="email" id="email">
                            </div>
                            <label for="email-6" class="field-label-4">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                            <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                            <input type="submit" data-wait="Please wait..." class="submit-button w-button">
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane">
                <div class="div-block-27"><img src="{{asset('/image/CMJ12.webp')}}"
                        alt="" class="image-26"></div>
                <div class="div-block-26">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-OS-SHL-Text') }}</div>
                    <div class="headline-2">{{ trans('how-it-work.HIW-OS-HL-Title') }}</div>
                    <p class="paragraph-2">{{ trans('how-it-work.HIW-OS-ST-Text') }}</p>
                </div>
                <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OS1-SHL-Text') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-OS1-HL-Title') }}</div>
                        <p class="paragraph-5">{{ trans('how-it-work.HIW-OS1-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/CMJ13.webp')}}" alt="" class="image-feature"></div>
                </div>
                <div class="feature-exp even w-row">
                    <div class="column-34 w-col w-col-6"><img src="{{asset('/image/CMJ14.webp')}}" alt="" class="image-feature"></div>
                    <div class="column-35 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OS2-SHL-Text') }}</div>
                        <div class="headline headline-features ml-0">{{ trans('how-it-work.HIW-OS2-HL-Title') }}</div>
                        <p class="paragraph-5 text-align-left">{{ trans('how-it-work.HIW-OS2-ST-Text') }}</p>
                    </div>
                </div>
                <!-- <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-OS3-SHL-Text') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-OS3-HL-Title') }}</div>
                        <p class="paragraph-5">{{ trans('how-it-work.HIW-OS3-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/CMJ14.webp')}}" alt="" class="image-feature"></div>
                </div> -->
                <div class="div-block-27"><img src="{{asset('/image/CMJ15.webp')}}"
                        alt="" class=""></div>
                <div class="div-block-29">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-OS-FL-SHL') }}</div>
                    <div class="w-layout-grid grid-2">
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/SistemTerdapat.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OS-FL1-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-OS-FL1-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img
                                    src="{{asset('/image/DataSepenuhnya.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader-2">{{ trans('how-it-work.HIW-OS-FL2-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-OS-FL2-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/AplikasiFullyCust.webp')}}"
                                    alt="" class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-OS-FL3-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-OS-FL3-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution3" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div class="columns-4 w-row">
                                <div class="w-col w-col-4">
                                    <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="email" id="email">
                                </div>
                            </div>
                            <div class="w-row w-100">
                                <div class="w-col w-col-12">
                                    <label for="email-6" class="field-label text-align-left">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                                    <input type="submit" data-wait="Please wait..." class="submit-button w-button float-right">
                                </div>
                            </div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="form-block hide-mobile w-form">
                        <form id="contactItSolution3" class="form-2  hide-mobile" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div>
                                <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                            </div>
                            <div>
                                <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                            </div>
                            <div>
                                <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                <input type="text" class="text-field-2 w-input" name="email" id="email">
                            </div>
                            <label for="email-6" class="field-label-4">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                            <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                            <input type="submit" data-wait="Please wait..." class="submit-button w-button">
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 4" class="w-tab-pane">
                <div class="div-block-27"><img src="{{asset('/image/CMJ17.webp')}}" class="image-26"></div>
                <div class="div-block-26">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-API-SHL-Text') }}</div>
                    <div class="headline-2">{{ trans('how-it-work.HIW-API-HL-Title') }}</div>
                    <p class="paragraph-2">{{ trans('how-it-work.HIW-API-ST-Text') }}</p>
                </div>
                <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-API1-SHL-Text') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-API1-HL-Title') }}</div>
                        <p class="paragraph-5">{{ trans('how-it-work.HIW-API1-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('/image/CMJ18.webp')}}"
                            alt="" class="image-feature"></div>
                </div>
                <div class="feature-exp even w-row">
                    <div class="column-34 w-col w-col-6"><img src="{{asset('/image/CMJ19.webp')}}"
                            alt="" class="image-feature"></div>
                    <div class="column-35 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-API2-SHL-Text') }}</div>
                        <div class="headline headline-features ml-0">{{ trans('how-it-work.HIW-API2-HL-Title') }}</div>
                        <p class="paragraph-5 text-align-left">{{ trans('how-it-work.HIW-API2-ST-Text') }}</p>
                    </div>
                </div>
                <!-- <div class="feature-exp odd w-row">
                    <div class="column-34 w-col w-col-6">
                        <div class="text-block-5">{{ trans('how-it-work.HIW-API3-SHL-Text') }}</div>
                        <div class="headline headline-features">{{ trans('how-it-work.HIW-API3-HL-Title') }}</div>
                        <p class="paragraph-5">{{ trans('how-it-work.HIW-API3-ST-Text') }}</p>
                    </div>
                    <div class="column-35 w-col w-col-6"><img src="{{asset('webflow/images/Illustration-1.webp')}}" alt="" class="image-feature"></div>
                </div> -->
                <div class="div-block-27"><img src="{{asset('/image/CMJ20.webp')}}"
                        alt="" class=""></div>
                <div class="div-block-29">
                    <div class="text-block-3">{{ trans('how-it-work.HIW-API-FL-SHL') }}</div>
                    <div class="w-layout-grid grid-2">
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DapatMenyesuaikan.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-API-FL1-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-API-FL1-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img
                                    src="{{asset('/image/MessagingMenyesuaikan.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader-2">{{ trans('how-it-work.HIW-API-FL2-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-API-FL2-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/TidakMemerlukan.webp')}}"
                                    alt="" class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-API-FL3-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-API-FL3-Text') }}</div>
                            </div>
                        </div>
                        <div class="feature-showcase">
                            <div class="div-block-4 w-clearfix"><img src="{{asset('/image/HargaMenyesuaikan.webp')}}" alt=""
                                    class="cardimage"></div>
                            <div>
                                <div class="cardheader">{{ trans('how-it-work.HIW-API-FL4-Title') }}</div>
                                <div class="cardparagraph">{{ trans('how-it-work.HIW-API-FL4-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution4" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div class="columns-4 w-row">
                                <div class="w-col w-col-4">
                                    <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                                </div>
                                <div class="w-col w-col-4">
                                    <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                    <input type="text" class="text-field-2 w-input" name="email" id="email">
                                </div>
                            </div>
                            <div class="w-row w-100">
                                <div class="w-col w-col-12">
                                    <label for="email-6" class="field-label text-align-left">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                                    <input type="submit" data-wait="Please wait..." class="submit-button w-button float-right">
                                </div>
                            </div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="form-block hide-mobile w-form">
                        <form id="contactItSolution4" class="form-2  hide-mobile" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="howitworks">
                            <div>
                                <label for="name-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-FullName') }}</label>
                                <input type="text" class="text-field-2 w-input" name="fullname" id="fullname">
                            </div>
                            <div>
                                <label for="company-5" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Company') }}</label>
                                <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                            </div>
                            <div>
                                <label for="email-6" class="field-label">{{ trans('how-it-work.HIW-OF-CON-Email') }}</label>
                                <input type="text" class="text-field-2 w-input" name="email" id="email">
                            </div>
                            <label for="email-6" class="field-label-4">{{ trans('how-it-work.HIW-OF-CON-Description') }}</label>
                            <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                            <input type="submit" data-wait="Please wait..." class="submit-button w-button">
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

@endsection
@section('modal')
@endsection

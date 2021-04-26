@extends('main.basic')
@section('content')


<div class="feature-content">
    <div class="container">
        <div class="div-block-34 mt-3 custom-float-left">
            <a href="{{route('home')}}" class="back-button w-button"></a>
        </div>
    </div>

    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="tabs-menu-4 w-tab-menu">
            <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link w--current">
                <div class="text-block-28">On Cloud</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-2-2 w-inline-block w-tab-link">
                <div>Onsite Deployment</div>
            </a>
            <a data-w-tab="Tab 3" class="tab-link-tab-3-3 w-inline-block w-tab-link">
                <div>API Integration</div>
            </a>
        </div>
        <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1-2 w-tab-pane w--tab-active">
                <div class="text-block-3">{{ trans('pricing.PRC-OC-SHL-Title') }}</div>
                <div class="headline">{{ trans('pricing.PRC-OC-HL-Title') }}</div>
                <p class="paragraph-2">{{ trans('pricing.PRC-OC-ST-Text') }}</p>
                <div class="container">
                    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                        <div class="tabs-menu w-tab-menu">
                            <a data-w-tab="Tab 1" class="tab-link-tab-1-4 w-inline-block w-tab-link w--current">
                                <div>{{ trans('pricing.PRC-OC-BSC-HL') }}</div>
                            </a>
                            <a data-w-tab="Tab 2" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                                <div>{{ trans('pricing.PRC-OC-MDM-HL') }}</div>
                            </a>
                            <a data-w-tab="Tab 3" class="tab-link-tab-3-4 w-inline-block w-tab-link">
                                <div>{{ trans('pricing.PRC-OC-ADV-HL') }}</div>
                            </a>
                        </div>
                        <div class="tabs-content w-tab-content">
                            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                                <div class="w-row">
                        <div class="pricing mobile">
                            <div class="div-block-24 w-clearfix"><img src="{{asset('/image/Starter.webp')}}" alt="" class="qtrimg"></div>
                            <div class="div-block-6 marbot20">
                                <div class="cardheader pricing price">{{ trans('pricing.PRC-OC-BSC-HL') }}</div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC2-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC2-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC3-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC3-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC4-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC4-Text') }}</div></div>
                                </div>
                            <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC5-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC5-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC6-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC6-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC7-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC7-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC8-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC8-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC9-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC9-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC11-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC11-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC12-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC12-Text') }}</div></div>
                                </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div data-w-tab="Tab 2" class="w-tab-pane">
                                <div class="w-row">
                        <div class="pricing mobile">
                            <div class="div-block-24 w-clearfix"><img src="{{asset('/image/Medium.webp')}}" alt="" class="qtrimg"></div>
                            <div class="div-block-6 marbot20">
                                <div class="cardheader pricing price">{{ trans('pricing.PRC-OC-MDM-HL') }}</div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC2-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC2-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC3-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC3-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC4-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC4-Text') }}</div></div>
                                </div>
                            <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC5-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC5-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC6-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC6-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC7-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC7-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC8-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC8-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC9-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC9-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC11-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC11-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC12-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-MDM-PRC12-Text') }}</div></div>
                                </div>
                                </div>
                            </div>
                        </div>

                            </div>
                            <div data-w-tab="Tab 3" class="w-tab-pane">
                                <div class="w-row">
                        <div class="pricing mobile">
                            <div class="div-block-24 w-clearfix"><img src="{{asset('/image/Corporate.webp')}}" alt="" class="qtrimg"></div>
                            <div class="div-block-6 marbot20">
                                <div class="cardheader pricing price">{{ trans('pricing.PRC-OC-ADV-HL') }}</div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC2-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC2-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC3-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC3-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC4-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC4-Text') }}</div></div>
                                </div>
                            <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC5-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC5-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC6-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC6-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC7-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC7-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC8-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC8-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC9-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC9-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC1-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC1-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC11-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC11-Text') }}</div></div>
                                </div>
                                <div class="columns-31 w-row pricerow odd">
                                    <div class="column-22 w-col w-col-6">
                                    <div class="priceheadline feature-benefit">{{ trans('pricing.PRC-OC-BSC-PRC12-Title') }}</div>

                                    </div>
                                    <div class="column-22 w-col w-col-6">
                                    <div class="pricetext feature-benefit">{{ trans('pricing.PRC-OC-ADV-PRC12-Text') }}</div></div>
                                </div>
                                </div>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-block-3">{{ trans('pricing.PRC-OC-SF-SHL-Title') }}</div>
                <div class="headline">{{ trans('pricing.PRC-OC-SF-HL-Title') }}</div>
                <p class="paragraph-2">{{ trans('pricing.PRC-OC-SF-ST-Text') }}</p>

                <div class="w-container-commjunction">
                    <div class="columns-31 w-row">
                        <div class="column-6 w-col w-col-6">
                            <div class="headline feature-benefit">{{ trans('pricing.PRC-OC-SF1-Title') }}</div>
                            <p class="headline-p sub-head">{{ trans('pricing.PRC-OC-SF1-Text') }}</p>
                        </div>
                        <div class="column-22 w-col w-col-6"><img src="{{asset('/image/CMJ51.webp')}}" alt="" class="halfimg"></div>
                    </div>
                    <div class="columns-32 w-row">
                        <div class="column-6 w-col w-col-6"><img src="{{asset('/image/CMJ51-1.webp')}}" alt="" class="halfimg" ></div>
                        <div class="column-22 w-col w-col-6">
                            <div class="headline feature-benefit odd">{{ trans('pricing.PRC-OC-SF2-Title') }}</div>
                            <p class="headline-p sub-head odd">{{ trans('pricing.PRC-OC-SF2-Text') }}</p>
                        </div>
                    </div>
                </div>



                <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="pricing">
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
                            <input type="hidden" name="url" value="pricing">
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
                <div class="div-block-67">
                    <div class="text-block-3">{{ trans('pricing.PRC-OD-SHL-Title') }}</div>
                        <div class="headline">{{ trans('pricing.PRC-OD-HL-Title') }}</div>
                        <p class="paragraph-2">{{ trans('pricing.PRC-OD-ST-Text') }}</p>
                    </div>
                    <div class="w-container-commjunction">
                        <div class="columns-31 w-row">
                            <div class="column-6 w-col w-col-6">
                                <div class="headline feature-benefit">{{ trans('pricing.PRC-OD-SF1-Title') }}</div>
                                <p class="headline-p sub-head">{{ trans('pricing.PRC-OD-SF1-Text') }}</p>
                            </div>
                            <div class="column-22 w-col w-col-6"><img src="{{asset('/image/CMJ53.webp')}}" alt="" class="halfimg"></div>
                        </div>
                        <div class="columns-32 w-row">
                            <div class="column-6 w-col w-col-6"><img src="{{asset('/image/CMJ53-1.webp')}}" alt="" class="halfimg"></div>
                            <div class="column-22 w-col w-col-6">
                                <div class="headline feature-benefit odd">{{ trans('pricing.PRC-OD-SF2-Title') }}</div>
                                <p class="headline-p odd sub-head">{{ trans('pricing.PRC-OD-SF2-Text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolutio2" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="pricing">
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
                            <input type="hidden" name="url" value="pricing">
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
                <div class="div-block-67">
                    <div class="text-block-3">{{ trans('pricing.PRC-API-SHL-Title') }}</div>
                        <div class="headline">{{ trans('pricing.PRC-API-HL-Title') }}</div>
                        <p class="paragraph-2">{{ trans('pricing.PRC-API-ST-Text') }}</p>
                    </div>
                    <div class="w-container-commjunction">
                        <div class="columns-31 w-row">
                            <div class="column-6 w-col w-col-6">
                                <div class="headline feature-benefit">{{ trans('pricing.PRC-API-SF1-Title') }}</div>
                                <p class="headline-p sub-head">{{ trans('pricing.PRC-API-SF1-Text') }}</p>
                            </div>
                            <div class="column-22 w-col w-col-6"><img src="{{asset('/image/CMJ55.webp')}}" alt="" class="halfimg"></div>
                        </div>
                        <div class="columns-32 w-row">
                            <div class="column-6 w-col w-col-6"><img src="{{asset('/image/CMJ55-2.webp')}}" alt="" class="halfimg"></div>
                            <div class="column-22 w-col w-col-6">
                                <div class="headline feature-benefit odd">{{ trans('pricing.PRC-API-SF2-Title') }}</div>
                                <p class="headline-p odd sub-head">{{ trans('pricing.PRC-API-SF2-Text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="div-block-29">
                    <div class="form-block w-form">
                        <div class="headline title-form-cta-hiw">{{ trans('how-it-work.HIW-OF-CON-Title') }}</div>

                        <form id="contactItSolution3" class="form-2" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="subjectEmail" value="Commjunction">
                            <input type="hidden" name="url" value="pricing">
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
                            <input type="hidden" name="url" value="pricing">
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

@endsection
@section('modal')
@endsection

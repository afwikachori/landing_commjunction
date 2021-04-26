@extends('main.basic')
@section('content')

<div class="feature-content">
    <div class="container">
      <div class="div-block-34 mt-3">
        <a href="{{route('home')}}" class="back-button w-button"></a>
      </div>
    </div>

    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="tabs-menu-4 w-tab-menu">
        <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link w--current">
          <div>Platform Features</div>
        </a>
        <a data-w-tab="Tab 2" class="tab-link-tab-2-2 w-inline-block w-tab-link">
          <div>Basic Features</div>
        </a>
        <a data-w-tab="Tab 3" class="tab-link-tab-3-3 w-inline-block w-tab-link">
          <div>Medium Features</div>
        </a>
        <a data-w-tab="Tab 4" class="tab-link-tab-4-2 w-inline-block w-tab-link">
          <div>Advanced Features</div>
        </a>
      </div>
      <div class="w-tab-content">
        <div data-w-tab="Tab 1" class="tab-pane-tab-1-2 w-tab-pane w--tab-active">
          <div class="container">
          <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1-4 w-inline-block w-tab-link w--current">
                <div>{{ trans('features.FTR-PF-AT-HL') }}</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                <div>{{ trans('features.FTR-PF-DT-HL') }}</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3-4 w-inline-block w-tab-link">
                <div>{{ trans('features.FTR-PF-ST-HL') }}</div>
              </a>
              <a data-w-tab="Tab 4" class="tab-link-tab-3-4 w-inline-block w-tab-link">
                <div>{{ trans('features.FTR-PF-PM-HL') }}</div>
              </a>
            </div>
            <div class="tabs-content w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div class="div-block-69"><img src="{{asset('/image/Authentication.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-PF-AT-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-PF-AT-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-PF-AT-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-PF-AT1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-PF-AT1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/secureAuth.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/authB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-PF-AT2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-PF-AT2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-PF-AT-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Registration.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-AT-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-AT-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Login.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-AT-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-AT-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/CustomPortal.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-AT-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-AT-SF3-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Dashboard.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-AT-SF4-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-AT-SF4-Text') }}</div>
                      </div>
                    </div>
                    <div id="w-node-deac93613b2f-0c5975b2" class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ForgotPassword.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">One-Register Away</div>
                        <div class="cardparagraph">Encrypted and super fast registration process</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                    <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" maxlength="256" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" maxlength="256" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" maxlength="256" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row w-100">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
                <div><img src="{{asset('/image/Dashboard.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-PF-DT-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-PF-DT-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-PF-DT-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-PF-DT1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-PF-DT1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/dashboardA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/dashboardB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-PF-DT2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-PF-DT2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline">{{ trans('features.FTR-PF-DT-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/dashboardSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-DT-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-DT-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/dashboardSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-DT-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-DT-SF2-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-DT-CON-Title') }}</div>
                  <div class="form-block w-form">
                    <form id="contactItSolution2"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                      <div class="columns-4 w-row">
                        <div class="w-col w-col-4">
                          <label for="name" class="field-label">{{ trans('features.FTR-PF-DT-CON-FullName') }}</label>
                          <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-DT-CON-Company') }}</label>
                          <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-DT-CON-Email') }}</label>
                          <input type="email" class="text-field-2 w-input" name="email" id="email">
                        </div>
                      </div>
                      <div class="w-col">
                        <div class="w-col w-col-12">
                          <label class="field-label">{{ trans('features.FTR-PF-DT-CON-Description') }}</label>
                          <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                          <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                    <form id="contactItSolution2"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                        <div class="columns-4 w-row">
                          <div class="w-col w-col-4">
                            <label for="name" class="field-label">{{ trans('features.FTR-PF-DT-CON-FullName') }}</label>
                            <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                          </div>
                          <div class="w-col w-col-4">
                            <label class="field-label">{{ trans('features.FTR-PF-DT-CON-Company') }}</label>
                            <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                          </div>
                          <div class="w-col w-col-4">
                            <label class="field-label">{{ trans('features.FTR-PF-DT-CON-Email') }}</label>
                            <input type="email" class="text-field-2 w-input" name="email" id="email">
                          </div>
                        </div>
                        <label class="field-label-4">{{ trans('features.FTR-PF-DT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
               <div><img src="{{asset('/image/ProfileManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-PF-ST-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-PF-ST-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-PF-ST-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-PF-ST1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-PF-ST1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/ManageSub.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/SubscriberMan.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-PF-ST2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-PF-ST2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline">{{ trans('features.FTR-PF-ST-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ListSubscriber.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-ST-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-ST-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/FilterSubscriber.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-ST-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-ST-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DetailSubsribcer.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-ST-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-ST-SF3-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/EditSubscriber.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-ST-SF4-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-ST-SF4-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ApprovalSubscriber.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-ST-SF5-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-ST-SF5-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-ST-CON-Title') }}</div>
                  <div class="form-block w-form">
                    <form id="contactItSolution3"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                      <div class="columns-4 w-row">
                        <div class="w-col w-col-4">
                          <label for="name" class="field-label">{{ trans('features.FTR-PF-ST-CON-FullName') }}</label>
                          <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Company') }}</label>
                          <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Email') }}</label>
                          <input type="email" class="text-field-2 w-input" name="email" id="email">
                        </div>
                      </div>
                      <div class="w-row">
                        <div class="w-col w-col-12">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Description') }}</label>
                          <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                          <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                    <form id="contactItSolution3"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                      <div class="columns-4 w-row">
                        <div class="w-col w-col-4">
                          <label for="name" class="field-label">{{ trans('features.FTR-PF-ST-CON-FullName') }}</label>
                          <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Company') }}</label>
                          <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Email') }}</label>
                          <input type="email" class="text-field-2 w-input" name="email" id="email">
                        </div>
                      </div>
                      <label class="field-label-4">{{ trans('features.FTR-PF-ST-CON-Description') }}</label>
                      <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                      <input type="submit" class="submit-button w-button">
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
                <div><img src="{{asset('/image/SubscriberManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-PF-PM-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-PF-PM-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-PF-PM-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-PF-PM1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-PF-PM1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/KustomProfile.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/ProfileMan.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-PF-PM2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-PF-PM2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline">{{ trans('features.FTR-PF-ST-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/EditProfile.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-PM-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-PM-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ChangePassword.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-PF-PM-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-PM-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Logout.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-PM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-PM-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-ST-CON-Title') }}</div>
                  <div class="form-block w-form">
                    <form id="contactItSolution4"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                      <div class="columns-4 w-row">
                        <div class="w-col w-col-4">
                          <label for="name" class="field-label">{{ trans('features.FTR-PF-ST-CON-FullName') }}</label>
                          <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Company') }}</label>
                          <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Email') }}</label>
                          <input type="email" class="text-field-2 w-input" name="email" id="email">
                        </div>
                      </div>
                      <div class="w-row">
                        <div class="w-col w-col-12">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Description') }}</label>
                          <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                          <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                    <form id="contactItSolution4"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="subjectEmail" value="Commjunction">
                        <input type="hidden" name="url" value="features">
                      <div class="columns-4 w-row">
                        <div class="w-col w-col-4">
                          <label for="name" class="field-label">{{ trans('features.FTR-PF-ST-CON-FullName') }}</label>
                          <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Company') }}</label>
                          <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                        </div>
                        <div class="w-col w-col-4">
                          <label class="field-label">{{ trans('features.FTR-PF-ST-CON-Email') }}</label>
                          <input type="email" class="text-field-2 w-input" name="email" id="email">
                        </div>
                      </div>
                      <label class="field-label-4">{{ trans('features.FTR-PF-ST-CON-Description') }}</label>
                      <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                      <input type="submit" class="submit-button w-button">
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
        <div data-w-tab="Tab 2" class="w-tab-pane">
          <div class="container">
          <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1-4 w-inline-block w-tab-link w--current">
                <div>{{ trans('features.FTR-BF-TR-HL') }}</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                <div>{{ trans('features.FTR-BF-RR-HL') }}</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3-4 w-inline-block w-tab-link">
                <div>{{ trans('features.FTR-BF-MM-HL') }}</div>
              </a>
            </div>
            <div class="tabs-content w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
               <div class="div-block-69"><img src="{{asset('/image/TransactionReport.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-BF-TR-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-BF-TR-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-BF-TR-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-BF-TR1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-BF-TR1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/transactionA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/transactionB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-BF-TR2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-BF-TR2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-BF-TR-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ListAllTransaction.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-TR-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-TR-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/FilterTransaction.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-BF-TR-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-TR-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DetailTransaction.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-TR-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-TR-SF3-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DownloadTransaction.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-TR-SF4-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-TR-SF4-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution5"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname" name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution5"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
                <div class="div-block-69"><img src="{{asset('/image/ReconcileReport.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-BF-RR-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-BF-RR-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-BF-RR-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-BF-RR1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-BF-RR1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/ReconReport.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/ReconDownload.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-BF-RR2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-BF-RR2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-BF-RR-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ListRecon.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-PF-AT-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-PF-AT-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/FilterRecon.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-BF-RR-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-RR-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DownRecon.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-RR-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-RR-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution6"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution6"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
                <div class="div-block-69"><img src="{{asset('/image/ModuleManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-BF-MM-HL') }}</div>
                  <div class="headline">{{ trans('features.FTR-BF-MM-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-BF-MM-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-BF-MM1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-BF-MM1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/moduleA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/moduleB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-BF-MM2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-BF-MM2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-BF-MM-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ConnectNewModule.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-MM-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-MM-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/DisplayModule.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-BF-MM-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-MM-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/SettingModule.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-BF-MM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-BF-MM-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution7"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution7"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
        <div data-w-tab="Tab 3" class="w-tab-pane">
          <div class="container">
          <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1-4 w-inline-block w-tab-link w--current">
                <div>Report Management</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                <div>Module Report</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                <div>User Management</div>
              </a>
            </div>
            <div class="tabs-content w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div class="div-block-69"><img src="{{asset('/image/ReportManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-MF-RM-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-MF-RM-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-MF-RM-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-MF-RM1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-MF-RM1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/ReportManagementA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/ReportManagementB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-MF-RM2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-MF-RM2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-MF-RM-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ReportManagementSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-RM-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-RM-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ReportManagementSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-MF-RM-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-RM-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ReportManagementSubC.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-RM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-RM-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution8"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution8"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
               <div class="div-block-69"><img src="{{asset('/image/ModuleReport.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-MF-MR-HL') }}</div>
                  <div class="headline">{{ trans('features.FTR-MF-MR-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-MF-MR-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-MF-MR1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-MF-MR1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/ModuleReportA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/ModuleReportB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-MF-MR2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-MF-MR2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-MF-MR-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ModuleReportSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-MR-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-MR-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ModuleReportSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-MF-MR-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-MR-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ModuleReportSubC.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-MR-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-MR-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution9"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution9"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
               <div class="div-block-69"><img src="{{asset('/image/UserManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-MF-UM-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-MF-UM-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-MF-UM-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-MF-UM1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-MF-UM1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/UserManagementA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/UserManagementB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-MF-UM2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-MF-UM2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-MF-UM-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/UserManagementSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-UM-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-UM-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/UserManagementSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-MF-UM-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-UM-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/UserManagementSubC.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-UM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-UM-SF3-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/UserManagementSubD.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-UM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-UM-SF3-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/UserManagementSubE.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-MF-UM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-MF-UM-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution10"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution10"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
        <div data-w-tab="Tab 4" class="w-tab-pane">
          <div class="container">
          <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1-4 w-inline-block w-tab-link w--current">
                <div>{{ trans('features.FTR-AF-LM-HL') }}</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2-3 w-inline-block w-tab-link">
                <div>Custom Features</div>
              </a>
            </div>
            <div class="tabs-content w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">

               <div class="div-block-69"><img src="{{asset('/image/LogManagement.webp')}}" alt="" class="image-26"></div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-AF-LM-HL') }}</div>
                  <div class="headline">{{ trans('features.FTR-AF-LM-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-AF-LM-ST') }}</p>
                </div>
                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-AF-LM1-HL') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-AF-LM1-ST') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/LogManagementA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/LogManagementB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-AF-LM2-HL') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-AF-LM2-ST') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-AF-LM-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/LogManagementSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-AF-LM-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-AF-LM-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/LogManagementSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-AF-LM-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-AF-LM-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/LogManagementSubC.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-AF-LM-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-AF-LM-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution11"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution11"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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
                 <div class="div-block-69">
                  <img src="{{asset('/image/CustomFeature.webp')}}" alt="" class="image-26">
                </div>
                <div>
                  <div class="text-block-3">{{ trans('features.FTR-CF-SHL') }}</div>
                  <div class="headline">{{ trans('features.FTR-CF-HL') }}</div>
                  <p class="paragraph-2">{{ trans('features.FTR-CF-ST') }}</p>
                </div>

                <div class="columns-31 w-row">
                  <div class="column-6 w-col w-col-6">
                    <div class="headline-sub">Sub Feature</div>
                    <div class="headline feature-benefit text-align-right">{{ trans('features.FTR-CF-F1-Title') }}</div>
                    <p class="headline-p">{{ trans('features.FTR-CF-F1-Text') }}</p>
                  </div>
                  <div class="column-22 w-col w-col-6"><img src="{{asset('/image/CustomFeatureA.webp')}}" alt=""></div>
                </div>
                <div class="columns-32 w-row">
                  <div class="column-6 w-col w-col-6"><img src="{{asset('/image/CustomFeatureB.webp')}}" alt=""></div>
                  <div class="column-22 w-col w-col-6">
                    <div class="headline-sub odd">Sub Feature</div>
                    <div class="headline feature-benefit odd ml-0">{{ trans('features.FTR-CF-F2-Title') }}</div>
                    <p class="headline-p odd">{{ trans('features.FTR-CF-F2-Text') }}</p>
                  </div>
                </div>
                <div>
                  <div class="headline">{{ trans('features.FTR-CF-HIW') }}</div>
                </div>
                <div class="div-block-69">
                  <img src="{{asset('/image/CMJ47.webp')}}" alt="">
                </div>
                <div>
                  <div class="headline sub-feature">{{ trans('features.FTR-PF-AT-SF-HL') }}</div>
                  <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/CustomFeatureSubA.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-CF-SF1-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-CF-SF1-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/CustomFeatureSubB.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader-2">{{ trans('features.FTR-CF-SF2-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-CF-SF2-Text') }}</div>
                      </div>
                    </div>
                    <div class="feature-showcase">
                      <div class="div-block-4 w-clearfix"><img src="{{asset('/image/CustomFeatureSubC.webp')}}" alt="" class="cardimage"></div>
                      <div>
                        <div class="cardheader">{{ trans('features.FTR-CF-SF3-Title') }}</div>
                        <div class="cardparagraph">{{ trans('features.FTR-CF-SF3-Text') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div-block-70">
                  <div class="headline head-form">{{ trans('features.FTR-PF-AT-CON-Title') }}</div>
                  <div class="form-block w-form">
                  <form id="contactItSolution12"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <div class="w-row">
                      <div class="w-col w-col-12">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                        <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                        <input type="submit" class="submit-button w-button">
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
                  <div class="form-block mobile w-form">
                  <form id="contactItSolution12"  action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subjectEmail" value="Commjunction">
                      <input type="hidden" name="url" value="features">
                    <div class="columns-4 w-row">
                      <div class="w-col w-col-4">
                        <label for="name" class="field-label">{{ trans('features.FTR-PF-AT-CON-FullName') }}</label>
                        <input type="text" class="text-field-2 w-input" id="fullname"  name="fullname">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Company') }}</label>
                        <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                      </div>
                      <div class="w-col w-col-4">
                        <label class="field-label">{{ trans('features.FTR-PF-AT-CON-Email') }}</label>
                        <input type="email" class="text-field-2 w-input" name="email" id="email">
                      </div>
                    </div>
                    <label class="field-label-4">{{ trans('features.FTR-PF-AT-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
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

      </div>
    </div>
  </div>

@endsection
@section('modal')
@endsection

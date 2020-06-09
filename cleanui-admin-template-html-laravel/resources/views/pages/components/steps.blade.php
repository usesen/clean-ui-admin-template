@extends ('layouts.app')

@section('content')
<!-- START: components/steps -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Steps</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Block Steps w/ Digit</strong></h5>
          <p class="text-muted">Element: <code>div.cui-utils-step</code></p>
          <p class="text-muted">
            Modifiers: <code>default</code>, <code>primary</code>, <code>secondary</code>,
            <code>success</code>, <code>info</code>, <code>warning</code>, <code>danger</code>,
            <code>disabled</code>
          </p>
          <p class="text-muted">Color Modifier: <code>.cui-utils-step-(modifier)</code></p>
          <div class="row">
            <div class="col-lg-3">
              <!-- Example State Default -->
              <div class="cui-utils-step cui-utils-step-success">
                <span class="cui-utils-step-digit">1</span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Default -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Error -->
              <div class="cui-utils-step cui-utils-step-primary">
                <span class="cui-utils-step-digit">2</span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Error -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Current -->
              <div class="cui-utils-step cui-utils-step-danger">
                <span class="cui-utils-step-digit">3</span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Current -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Disabled -->
              <div class="cui-utils-step cui-utils-step-default cui-utils-step-disabled">
                <span class="cui-utils-step-digit">14</span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Disabled</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Disabled -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Squared Block Steps w/ Icon</strong></h5>
          <p class="text-muted">Element: <code>span.cui-utils-step-digit</code></p>
          <div class="row">
            <div class="col-lg-3">
              <!-- Example State Done -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                <span class="cui-utils-step-digit">
                  <i class="icmn-home"><!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Done -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Error -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                <span class="cui-utils-step-digit">
                  <i class="icmn-key"><!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="scui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Error -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Current -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                <span class="cui-utils-step-digit">
                  <i class="icmn-play2"><!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Current -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Disabled -->
              <div class="cui-utils-step">
                <span class="cui-utils-step-digit">
                  <i class="icmn-database"><!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Disabled -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-black"><strong>Steps in card Heading</strong></h5>
        <p class="text-muted">Insert Step into <code>.card-header</code> element</p>
        <div class="mb-5">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-lg-3">
                  <!-- Example State Default -->
                  <div class="cui-utils-step cui-utils-step-success">
                    <span class="cui-utils-step-digit">1</span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Default -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Error -->
                  <div class="cui-utils-step cui-utils-step-primary">
                    <span class="cui-utils-step-digit">2</span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Error -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Current -->
                  <div class="cui-utils-step cui-utils-step-danger">
                    <span class="cui-utils-step-digit">3</span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Current -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Disabled -->
                  <div class="cui-utils-step cui-utils-step-default cui-utils-step-disabled">
                    <span class="cui-utils-step-digit">14</span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Disabled</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Disabled -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  card Body Content
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-black"><strong>Steps in card Heading w/ Icon</strong></h5>
        <p class="text-muted">Element: <code>span.cui-utils-step-digit</code></p>
        <div class="mb-5">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-lg-3">
                  <!-- Example State Done -->
                  <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                    <span class="cui-utils-step-digit">
                      <i class="icmn-home"><!-- --></i>
                    </span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Done -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Error -->
                  <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                    <span class="cui-utils-step-digit">
                      <i class="icmn-key"><!-- --></i>
                    </span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Error -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Current -->
                  <div class="cui-utils-step cui-utils-step-squared cui-utils-step-default">
                    <span class="cui-utils-step-digit">
                      <i class="icmn-play2"><!-- --></i>
                    </span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Current -->
                </div>
                <div class="col-lg-3">
                  <!-- Example State Disabled -->
                  <div class="cui-utils-step">
                    <span class="cui-utils-step-digit">
                      <i class="icmn-database"><!-- --></i>
                    </span>
                    <div class="cui-utils-step-desc">
                      <span class="cui-utils-step-title">Block Title</span>
                      <p>Waiting for review</p>
                    </div>
                  </div>
                  <!-- End Example State Disabled -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  card Body Content
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-black"><strong>Inline Steps</strong></h5>
        <p class="text-muted">Element: <code>div.cui-utils-steps-inline</code></p>
        <div class="cui-utils-steps-inline mb-2 mr-2">
          <div class="cui-utils-step cui-utils-step-primary"><i class="icmn-home"></i></div>
          <div class="cui-utils-step cui-utils-step-primary">1</div>
          <div class="cui-utils-step cui-utils-step-primary">2</div>
          <div class="cui-utils-step">3</div>
        </div>
        <div class="cui-utils-steps-inline  mb-2 mr-2">
          <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"></a>
          <a
            href="javascript: void(0);"
            class="cui-utils-step cui-utils-step-success cui-utils-step-disabled"
          ></a>
          <a href="javascript: void(0);" class="cui-utils-step"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: components/steps -->

@endsection
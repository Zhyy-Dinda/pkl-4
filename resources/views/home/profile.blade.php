@include('component.header')
<div class="body-wrapper overflow-hidden">

    <div class="body-wrapper overflow-hidden">
        <section class="bg-light py-5 py-lg-10 py-xl-12">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-xxl-6">
                <h2 class="fs-9 text-center mb-5 fw-bolder">Profil MataramKota-CSIRT</h2>
              </div>
            </div>
            <div class="sliding-wrapper position-relative overflow-hidden">
              <div class="slide-background bg-img-frimary d-flex flex-row w-100">
                <div class="slide">
                  <img src="dist/images/slider/component-slider.png" alt="slide" height="100%">
                </div>
                <div class="slide">
                  <img src="dist/images/slider/slider-group.png" alt="slide" height="100%">
                </div>
                <div class="slide">
                  <img src="dist/images/slider/slider-group.png" alt="slide" height="100%">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      {{-- <div class="container">
        <div class="m-4 rounded d-flex">
          <iframe class="rounded shadow " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40893.6432320762!2d116.2150029932595!3d-8.69000943772701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1706663034549!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class=" mx-3">
          <a target="_blank" href="https://diskominfo.lomboktengahkab.go.id/">
            <h1 class="text-primary">Diskominfo Lombok tengah</h1>
          </a>
          <p class="">description</p>
        </div>
        </div>
      </div> --}}
</div>

@include('component.menubar')
@include('component.script')
@include('component.footer')

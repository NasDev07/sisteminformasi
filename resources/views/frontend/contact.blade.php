@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-primary fw-bolder">Contact</h2>
                <p class="fst-italic">Need Help? <span class="text-primary">Contact Us</span></p>
            </div>

            <div class="mb-3">
                <iframe class="rounded" style="border:0; width: 100%; height: 370px;" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.4262205144091!2d97.06253410635202!3d5.200345613268311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30477791a9360dc9%3A0x828c7e3bd0f2da2e!2sJurusan%20Teknik%20Informatika%20%26%20Sistem%20Informasi!5e1!3m2!1sen!2sid!4v1655791049339!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Alamat kami</h3>
                            <p>Jurusan Teknik Informatika & Sistem Informasi, 53X7+WFW, Blang Pulo, Muara Satu, Lhokseumawe City, Aceh 24355</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>sisteminformasi@unimal.ac.id</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+6200 0000 0000</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <div><strong>Mon-Sat:</strong> 08AM - 17PM;
                                <strong>Sunday:</strong> Closed
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>
        </div>
    </section>
@endsection

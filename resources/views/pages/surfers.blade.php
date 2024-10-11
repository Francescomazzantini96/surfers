<x-layouts.default>
    <x-slot:title>
        Surfers.Co
    </x-slot:title>
<section id="hero-section">
            <x-layouts.header/>
            <div class="container">
                <div class="row banner">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                        <h2>Ride every wave as if it's your last</h2>
                        <h3>We love the motion of ocean</h3>
                    </div>
                </div>
            </div>
        </section>
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                    <x-slider.slider-style/>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-us">
            <div class="container">
                <div class="row title">
                    <div class="col-lg-12">
                        <h2 class="text-center">About us</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid g-0 sfondo">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="empty-space"></div>
                        <div class="container">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-0 bg-white py-5">
                                    <div class="col-lg-8 offset-lg-2 pt-lg-5">
                                        <div class="text-center">
                                            <h3>WE ARE SURFERS CO.</h3><img src="assets/image/svg/icona-pulsante-x.svg" class="ico" alt="we are servers | Surfer Co."></div>
                                        <p class="text-start pt-3">Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce iaculis feugiat arcunum fermentum hendrerit. Suspendisse auctor labor nisi, et interdum diam facilisis, aliquam pulvinar semi egetis belle sollicitudin ut. Nullam tincidun finibustus scelerisque.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-lg-5 offset-md-1 text-center text-lg-start"> 
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/25MctkR-kIA?si=eyEOsQzf2E6mQAkC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section id="contact-us">
            <div class="container">
                <div class="row title">
                    <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-0">
                        <h2>Instagram</h2>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-0 position-relative">
                        <div class="row row-col-2 g-0 carousel-instagram">
                            <div class="col-md-6"><img src="assets/image/carousel/surfersco-carousel-1.jpg" alt="instagram image 1 | Surfer co."></div>
                            <div class="col-md-6"><img src="assets/image/carousel/surfersco-carousel-2.jpg" alt="instagram image 2 | Surfer co."></div>
                            <div class="col-md-6"><img src="assets/image/carousel/surfersco-carousel-3.jpg" alt="instagram image 3 | Surfer co."></div>
                            <div class="col-md-6"><img src="assets/image/carousel/surfersco-carousel-4.jpg" alt="instagram image 4 | Surfer co."></div>
                            <div class="col-md-12 text-bg-light"><a href="#"><img src="assets/image/svg/icona-social-instagram.svg" class="ico" alt="logo instagram | Surfer co."> <span class="follow-us">Follow us</span> @surfersco</a></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5 offset-md-1">
                        <form action="" class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="name" id="form-name" placeholder="Name">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" name="email" id="form-email" placeholder="Email">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="birth-place" id="form-birth-place" placeholder="Birth place">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" name="birthday" id="form-birthday" placeholder="Birthday">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="tel" class="form-control" name="phone" id="form-phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="company" id="form-company" placeholder="Company">
                            </div>

                            <div class="col-12 mb-3">
                                <textarea class="form-control" name="message" id="form-message" placeholder="Your Messages"></textarea>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <input class="form-check-input" type="checkbox" id="form-privacy">
                                <label class="form-check-label" for="form-privacy">
                                  Accept privacy policy
                                </label>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="submit" class="btn btn-lg btn-primary" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <x-layouts.footer/>
</x-layouts.default>

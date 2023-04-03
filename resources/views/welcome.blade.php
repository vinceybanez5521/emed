@include('partials.header')

    @include('partials.welcome-navbar')
    
    {{-- Hero --}}
    <div class="hero">
        <div class="overlay">
            <div class="hero-text text-white text-center">
                <h1 class="display-2">The Future of Medical Care</h1>
                <h4 class="mb-4">We believe in providing you with the best medical care</h4>
                <a href="" class="btn btn-success btn-lg">Book a Doctor</a>
                <a href="{{route('apply-doctor')}}" class="btn btn-success btn-lg px-5 ms-4">Join Us</a>
            </div>
        </div>
        <i class="fas fa-user"></i>
    </div>

    {{-- Services --}}
    <section class="services" id="services">
        <div class="container py-5">
            <h2 class="text-center mb-5 fw-bold text-success text-uppercase">Our Services</h2>

            <div class="row">
                <div class="col-md-4 service p-4">
                    <i class="fas fa-tag text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Medical Pricing</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-shield-halved text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Quality & Safety</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-suitcase-medical text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Immediate Service</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 service p-4">
                    <i class="fas fa-flask-vial text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Cutting-Edge Equipment</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-shield-heart text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Personalized Treatment</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-user-doctor text-success fa-3x mb-3"></i>
                    <h3 class="text-success">Experience Physicians</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section class="aboutUs bg-success text-white" id="about">
        <div class="container py-5">
            <h2 class="fw-bold text-uppercase text-center mb-5">About Us</span></h2>

            <p class="lead text-justify text-center">
                eMED is one of the best hospitals in Manila that provides international-grade medical 
                services but with a Filipino heart. A multi-awarded private hospital, AHMC is the first healthcare facility in the country 
                with a hotel-like ambiance, promoting healing, comfort, and care for patients and even their families.
            </p>

            <p class="lead text-justify text-center">
                eMED is among the biggest hospitals in the Philippines. It is a world-class healthcare institution 
                equipped with cutting-edge technology to provide compassionate care tailored to each patient's needs. Our team of the best doctors 
                and surgeons is dedicated to delivering positive clinical outcomes, patient safety, and efficient disease management approaches.
            </p>

            <figure class="img-thumbnail mt-5">
                <img src="{{ asset('images/companyprofile.jpg') }}" alt="" class="img-fluid w-100">
                <figcaption>
                    <p class="text-center mt-3 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, at.</p>
                </figcaption>
            </figure>

            {{-- History --}}
            <div class="row history">
                <div class="mt-5">
                    <p class="lead">
                        Asian Hospital and Medical Center (AHMC) was founded on a vision to provide the Filipino people top notch medical
                        service that is at par with international standards. This idea was translated into reality through the passion and 
                        dedication of its people who are burning with fervor to give more of themselves and stay true to its commitment of 
                        providing “Innovations in Healthcare for an Unforgettable Healing Experience”.
                    </p>
                    <p class="lead">
                        Established on May 11, 2002, AHMC is a premiere tertiary hospital accredited by the Joint Commission International (JCI) 
                        as one of the most advanced healthcare institutions in the Philippines dedicated to providing value healthcare for patients 
                        and their families. It is a member of the Metro Pacific Hospital Group, the largest Philippine-based private hospital group 
                        managed by the Metro Pacific Investments Corporation (MPIC), the local unit of the First Pacific Group headed by Mr. Manuel V. Pangilinan.
                    </p>
                    <p class="lead">
                        The first hospital in the Philippines designed with a hotel-like ambiance, AHMC believes in creating an environment which ultimately promotes 
                        healing, comfort, and care for the patient and their family. AHMC boasts a 296-bed capacity on a 17,250-square meter, carefully planned and 
                        specially designed to provide a sanctuary that ensures the safety of every patient, guest, and staff. With over 1,000 doctors trained in various
                        specialties at the world's top institutions, more than 400 highly skilled nurses, and 1,000 employees and staff, AHMC continuously provides high 
                        quality patient care.
                    </p>
                    <p class="lead">
                        As one of the country's most advanced healthcare institutions, AHMC is guided by the values of fairness, integrity, teamwork, excellence, 
                        and respect that have served as the hospital's foundation since its establishment.
                    </p>
                    <p class="lead">
                        With a vision to become the Center of Global Expertise in caring for the unique needs of all patients and communities and a mission to deliver 
                        accessible world-class compassionate and integrative healthcare services to every individual. It efforts to innovate, its dedication to its beloved 
                        patients being the hospital's drive to embark on deliberate actions that will lead to the best clinical outcomes, quality patient safety, and efficient 
                        disease management approaches.
                    </p>
                </div>
                <div class="text-center mt-5">
                    <h2 class="fw-bold">GLOBAL EXPERTISE. FILIPINO HEART. </h2>
                    <p class="lead text-center">
                        Whether you're looking for a consultation, a surgery,or a family check-up, we invite you to experience our brand of “Tatak Asian” care.
                    </p>
                    <h2 class="fw-bold mt-5">BY THE NUMBERS</h2>
                    <p class="lead text-center">
                        The Hospital was designed with hotel-like ambience to promote healing and provide comfort.
        Although mainly for patients, it was also designed with visiting families and friends in mind.
        Here are more interesting facts.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Us --}}
    <section class="contactUs py-5" id="contact">
        <div class="container">
            <h2 class="fw-bold text-uppercase text-center mb-5">Contact Us</h2>

            <div class="row">
                <div class="col-md-5 mx-auto">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" name="message" rows="5" class="form-control" required></textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-success w-100">
                    </form>
                </div>
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.237453811999!2d121.04134481525882!3d14.413470685498195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d0486748c53f%3A0x970be8155b376d4a!2sAsian%20Hospital%20and%20Medical%20Center!5e0!3m2!1sen!2sph!4v1680541581540!5m2!1sen!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <p class="mt-5">2205 Civic Dr, Alabang, Muntinlupa, 1780 Metro Manila</p>
                    <div class="text-success fs-3">TRUNK LINE</div>
                    <p>+(632) 8-771-9000</p>
                    <div class="text-success fs-3">EMERGENCY</div>
                    <p>+(632) 8-876-5755</p>
                    <div class="text-success fs-3">E-MAIL ADDRESS</div>
                    <p>
                        For your comments and suggestions, e-mail us at feedback@asianhospital.com
                        <br> 
                        For your inquiries, e-mail us at info@asianhospital.com
                    </p>
                </div>
            </div>
        </div>
    </section>
    
@include('partials.footer')
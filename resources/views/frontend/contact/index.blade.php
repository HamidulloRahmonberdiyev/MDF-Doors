<x-layouts.frontend.main>

    <x-slot:title>Bog'lanish</x-slot:title>

    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Bog'lanish</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Ism"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Mavzu"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Xabar matni"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Yuborish</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d5934.23425864354!2d65.94952075702133!3d40.03927971824273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e0!4m3!3m2!1d40.0391185!2d65.9504567!4m3!3m2!1d40.0391633!2d65.9504801!5e1!3m2!1sen!2s!4v1685208388195!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Navoiy viloyat, Xatirchi tuman, Yangirabod shahri</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>hamidullo0760@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+998 99 750 20 50</p>
                </div>
            </div>
        </div>
    </div>
   
</x-layouts.frontend.main>
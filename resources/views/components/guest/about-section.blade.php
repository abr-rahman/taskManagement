@if(isset($about) && !empty($about))
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Message') }}</h6>
        <h1 class="mb-5 pb-3">{{ __('Message from the CEO') }}</h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-4 col-lg-4 col-sm-12 col-xsm-12 wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="position-relative h-100">
                <img src="{{ asset('images/CEO-2.png') }}" alt="Message from the CEO" style="">
            </div>
        </div>

        <div class="col-md-8 col-xl-8 col-lg-8 col-sm-12 col-xsm-12 wow fadeInUp" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; text-align: justify;">
                <textarea class="form-control" readonly rows="20" style="text-align: justify;">
Welcome to the official website of CERRS - the center for engineering, research, and revision services. I hope you will find this useful in knowing about us and the work we do to serve our clients and customers.

I am honored to introduce you to CERRS Ltd. (সার্স লিঃ in Bengali), an internet-based private limited company incorporated under the Companies Act of 1994 in Dhaka, Bangladesh. Our company specializes in providing innovative and cost-effective solutions to clients worldwide.

At CERRS Ltd., we cater to a diverse range of industries, including ed-tech, research, publishing, IT, civil consultancy, and language revision services. As a multi-disciplinary organization, we operate across these industries and can help you with all your needs, no matter what industry you're in. Our team of experts has the knowledge and expertise to deliver tailored solutions to meet your specific requirements.

In 2022, we came into action as a truly global business center with the key perseverance of providing online products and services in various sectors, such as engineering, research, development, publication, language proofreading, editing, and more. We serve clients all over the world, including academics, faculty members, researchers, authors, editors, publishers, businesspersons, and any university student at the undergraduate level or above. Our services are available at very nominal costs, and you can pay for them as needed.

Our team of experts is dedicated to staying up-to-date with the latest trends and technologies, so we can always offer you the best possible solutions. We believe in innovation, creativity, and excellence, and these values are at the core of everything we do. We strive to exceed your expectations in every aspect of our work and deliver exceptional results that can help you achieve your goals.

Thank you for taking the time to visit our website and consider CERRS for your needs. We appreciate your interest in our services and we look forward to working with you! Whether you need assistance with language editing, research, publication, engineering, or any other service we offer, we are here to help you. Please do not hesitate to contact us if you have any questions or would like to learn more about how we can assist you. Thank you again, and have a great day!

Sincerely,
Md. Mahabub Alam Moon
Managing Director and CEO
CERRS Ltd.
                </textarea>
            <a class="btn btn-primary py-3 px-5 mt-2" href="/overview">{{ __('About CERRS') }}</a>
        </div>
    </div>
</div>
@endif
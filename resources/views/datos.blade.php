<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tails Downloaded File</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="font-family: Nunito">

<!-- Section 1 -->
<section class="w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="#_" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">S.O.L.<span class="text-green-600">.</span></span>
            </a>
            <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <a href="/" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
                <a href="#aboutme" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Documentación</a>
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Datos</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
            <a href="#" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                Sign in
            </a>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-green-600 border border-transparent shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600 rounded-none">
                Sign up
            </a>
        </div>
    </div>
</section>


<!-- Section 3 -->
<section class="py-24 bg-white">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <h2 class="mb-4 text-xl font-bold md:text-3xl">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 gap-0 text-gray-600 md:grid-cols-2 md:gap-16">
            <div>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is Tails</h5>
                <p>Tails is a drag and drop page builder built on Top of TailwindCSS. You can drop components to create a page that you can export.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Can I try it for Free?</h5>
                <p>Absolutely, you can try out tails for free; however, if you wish to access all the components and export the page you'll need to upgrade your account.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Where do I go to upgrade my account?</h5>
                <p>
                    You can upgrade your account by visiting <a href="https://devdojo.com/pro" class="text-green-600 underline">The Pro Upgrade Page</a>. You will also gain access to many other applications and sections of the site.
                    <a href="https://help.hellonext.co/faq/startup-eligibility/" target="_blank">here</a>.
                </p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">How long will I have access to Tails</h5>
                <p>
                    You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account.
                    <a href="https://paddle.com" target="_blank">Paddle</a> for processing payments.
                </p>
            </div>
            <div>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">How do I implement into my project</h5>
                <p>Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is the license on the pages?</h5>
                <p>You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Can I cancel my account if I not longer need it?</h5>
                <p>Of course, you can feel free to cancel your account at anytime, and you can feel free to come back and upgrade again whenever you're ready.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">What if I need help with my project?</h5>
                <p>If you need assistance implementing the templates into your project you can contact support or you can visit our <a href="https://devdojo.com/questions" class="text-green-600 underline">question section</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 -->
<section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" id="aboutme">
    <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

        <!-- Image -->
        <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
            <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
            <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                Boost Productivity
            </h2>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                Build an atmosphere that creates productivity in your organization and your company culture.
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Maximize productivity and growth
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Speed past your competition
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Learn the top techniques
                </li>
            </ul>
        </div>
        <!-- End  Content -->
    </div>
    <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

        <!-- Content -->
        <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
            <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                Automated Tasks
            </h2>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                Save time and money with our revolutionary services. We are the leaders in the industry.
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Automated task management workflow
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Detailed analytics for your data
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span class="text-sm font-bold">✓</span></span> Some awesome integrations
                </li>
            </ul>
        </div>
        <!-- End  Content -->

        <!-- Image -->
        <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
            <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
        </div>
    </div>
</section>

<!-- Section 5 -->
<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Features to help you work smarter</h2>
                        </div>
                        <p class="text-2xl text-gray-700">We've created a simple formula to follow in order to gain more out of your business and your application.</p>
                        <a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-green-600 hover:bg-green-700 ease rounded-none">Get Started Today</a>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Signup</h4>
                    <p class="text-lg text-gray-500">or, if you have an account you can <a href="#_" class="text-green-600 underline">sign in</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <div class="relative">
                            <label class="font-medium text-gray-900">Name</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-600 focus:ring-opacity-50 rounded-none" placeholder="Enter Your Name">
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Email</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-600 focus:ring-opacity-50 rounded-none" placeholder="Enter Your Email Address">
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Password</label>
                            <input type="password" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-600 focus:ring-opacity-50 rounded-none" placeholder="Password">
                        </div>
                        <div class="relative">
                            <a href="#_" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-green-600 hover:bg-green-700 ease rounded-none">Create Account</a>
                            <a href="#_" class="inline-block w-full px-5 py-4 mt-3 text-lg font-bold text-center text-gray-900 transition duration-200 bg-white border border-gray-300 hover:bg-gray-100 ease rounded-none">Sign up with Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12"> <!-- Make this span the full width -->
            <div class="wrapper p-4 rounded shadow mb-4 bg-light">
                <div class ="d-flex justify-content-between">
                    @if(Auth::check())
                        @if (Auth::user()->is_role == 1)
                            <div class="text-center">
                                <p>Admin is already logged in. Go to the <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">Dashboard</a></p>
                            </div>
                        @elseif (Auth::user()->is_role == 0)
                            <div class="text-center">
                                <p>User is already logged in. Go to your <a href="{{ route('user.dashboard') }}" class="btn btn-outline-primary">Dashboard</a></p>
                            </div>
                        @endif
                    @else
                        <div class="text-center mb-2">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        </div>
                    @endif
                </div>
                <div class="title text-center mb-4">
                    <h1>Home</h1>
                </div>
                
            </div>
            <div class="wrapper p-4 rounded shadow mb-4 bg-light">
                <h2 class="text-center">Welcome to Our Website - Your One-Stop Platform for All Your Needs!</h2>
                <p>Welcome to our website! We're thrilled to have you here, and we're excited to share the features and offerings of our platform with you. Whether you're an admin, a user, or a first-time visitor, our site is designed with your needs in mind.</p>

                <h3>What is Our Website All About?</h3>
                <p>Our website serves as a powerful and easy-to-use platform that connects users with the tools and services they need. Whether you're looking to manage your account, check out your profile, or gain access to different administrative functions, everything you need is just a click away.</p>

                <h3>Easy Registration and Login</h3>
                <p>One of the first things you will notice is how simple it is to register and log in to your account. Whether you are an <strong>Admin</strong> or a <strong>User</strong>, we’ve made the process of logging in and signing up seamless and user-friendly. With our simple registration form, you can create an account in just a few clicks. Once logged in, you will have full access to your personal dashboard.</p>

                <h3>For Admins:</h3>
                <p>Admins have more control over the system and can manage users, check profiles, and access key data. Whether it's managing content, user roles, or overseeing important operations, our admin dashboard offers all the tools you need.</p>

                <h3>For Users:</h3>
                <p>Users have a smooth, engaging experience navigating through the website. You can update your personal information, view your activity, and access resources made just for you.</p>

                <h3>Manage Your Profile</h3>
                <p>The website makes it easy to manage and customize your profile. Whether you’re updating your name, email address, or any other personal details, you can do so easily from the dashboard. Keeping your information up-to-date has never been simpler.</p>

                <h3>Explore the Admin Dashboard</h3>
                <p>The <strong>Admin Dashboard</strong> is designed with all the functionalities needed to manage and oversee user data efficiently. Admins can view, update, and delete user accounts with just a few clicks. There’s also a built-in search feature that allows easy navigation and management of users.</p>

                <h3>Secure and User-Friendly Design</h3>
                <p>We prioritize security. All sensitive information, such as passwords and personal data, is encrypted for your safety. Our website is built using the latest technologies to ensure that your data remains secure and that you can enjoy a seamless experience without worrying about security risks.</p>

                <h3>Forgot Your Password? No Problem!</h3>
                <p>We know that passwords can be easily forgotten, and we’ve got you covered. Our website has a "Forgot Password" feature that allows users to easily reset their passwords via email. It’s simple, fast, and safe, ensuring you never lose access to your account.</p>

                <h3>Access Your Dashboard with Ease</h3>
                <p>After logging in, both users and admins can access their respective dashboards. Users can view their activities, and admins can manage and monitor all registered users. The dashboard is responsive, making it accessible from both desktop and mobile devices.</p>

                <h3>Get Help and Stay Informed</h3>
                <p>Our website offers help resources such as frequently asked questions (FAQ), support, and easy navigation to ensure that you always have what you need to stay informed and get the most out of your experience. You can also contact our support team if you need assistance.</p>

                <h3>Conclusion</h3>
                <p>We are committed to providing you with an intuitive, secure, and user-friendly platform. Whether you're an admin managing content or a user exploring the resources available, we’ve designed this site to meet all your needs. Thank you for choosing us — we’re here to support you at every step of the way.</p>
            </div>
        </div>
    </div>
</div>
@endsection

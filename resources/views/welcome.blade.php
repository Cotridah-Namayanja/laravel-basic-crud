{{-- filepath: c:\xampp\htdocs\laravel-basic-crud\resources\views\welcome.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Task Management Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-600">TaskFlow</span>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-indigo-600">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            Get Started
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="min-h-screen flex flex-col">
        <main class="flex-grow flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-5xl font-extrabold text-gray-900 mb-6">
                        Manage Tasks with Ease
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Stay organized, boost productivity, and collaborate seamlessly with your team.
                    </p>

                    @auth
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('create-task-link') }}"
                               class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                                Create New Task
                            </a>
                            <a href="{{ route('view-task-link') }}"
                               class="px-6 py-3 bg-white text-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-50 transition">
                                View Tasks
                            </a>
                        </div>
                    @else
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('register') }}"
                               class="px-8 py-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                                Start Free Trial
                            </a>
                            <a href="#features"
                               class="px-8 py-4 bg-white text-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-50 transition">
                                Learn More
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </main>

        <!-- Features Section -->
        <section id="features" class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6 border rounded-lg">
                        <h3 class="text-xl font-semibold mb-3">Task Organization</h3>
                        <p class="text-gray-600">Create, manage, and organize tasks efficiently.</p>
                    </div>
                    <div class="p-6 border rounded-lg">
                        <h3 class="text-xl font-semibold mb-3">Team Collaboration</h3>
                        <p class="text-gray-600">Work together seamlessly with your team.</p>
                    </div>
                    <div class="p-6 border rounded-lg">
                        <h3 class="text-xl font-semibold mb-3">Progress Tracking</h3>
                        <p class="text-gray-600">Monitor task progress and completion rates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p>&copy; 2025 TaskFlow. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>


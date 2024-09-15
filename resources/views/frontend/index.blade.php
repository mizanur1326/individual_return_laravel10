<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-gray-100">

    <!-- Main Container -->
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <!-- Flash message section -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-2xl font-bold text-center mb-6">Dashboard</h1>
            <div class="space-y-4">
                <!-- First Salary Return -->
                <a href="{{ route('first-salary-return.create') }}"
                    class="block w-full text-center py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                    First Salary Return
                </a>
                <!-- First Business Return -->
                <a href="#"
                    class="block w-full text-center py-2 px-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">
                    First Business Return
                </a>
                <!-- Salary Return -->
                <a href="#"
                    class="block w-full text-center py-2 px-4 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition duration-300">
                    Salary Return
                </a>
                <!-- Business Return -->
                <a href="#"
                    class="block w-full text-center py-2 px-4 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                    Business Return
                </a>
            </div>
        </div>
    </div>

</body>

</html>

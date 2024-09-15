<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>First Salary Return</title>
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
            <h1 class="text-2xl font-bold text-center mb-6">Salary First Return Form</h1>

        <form action="{{route('first-salary-return.store')}}" method="POST" class="space-y-4">
            @csrf
                <!-- Name -->
                <div>
                    <label class="block font-bold mb-1" for="name">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- NID -->
                <div>
                    <label class="block font-bold mb-1" for="nid">NID</label>
                    <input type="text" id="nid" name="nid" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- DOB -->
                <div>
                    <label class="block font-bold mb-1" for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- ETIN -->
                <div>
                    <label class="block font-bold mb-1" for="etin">ETIN</label>
                    <input type="text" id="etin" name="etin" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Circle -->
                <div>
                    <label class="block font-bold mb-1" for="circle">Circle</label>
                    <input type="text" id="circle" name="circle" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Taxes Zone -->
                <div>
                    <label class="block font-bold mb-1" for="taxes_zone">Taxes Zone</label>
                    <input type="text" id="taxes_zone" name="taxes_zone" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Assessment Year (default) -->
                <div>
                    <label class="block font-bold mb-1" for="assessment_year">Assessment Year</label>
                    <input type="text" id="assessment_year" name="assessment_year" class="w-full p-2 border border-gray-300 rounded-lg" value="2023" readonly>
                </div>

                <!-- Wife/Husband Name & TIN -->
                <div>
                    <label class="block font-bold mb-1" for="spouse">Wife/Husband Name & TIN (if spouse is a Taxpayer)</label>
                    <input type="text" id="spouse" name="spouse" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Address -->
                <div>
                    <label class="block font-bold mb-1" for="address">Address</label>
                    <input type="text" id="address" name="address" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Telephone -->
                <div>
                    <label class="block font-bold mb-1" for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Mobile -->
                <div>
                    <label class="block font-bold mb-1" for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block font-bold mb-1" for="email">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Past Life Savings -->
                <div>
                    <label class="block font-bold mb-1" for="past_savings">What amount you want to show as past life savings?</label>
                    <input type="number" id="past_savings" name="past_savings" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Ornaments (Quantity) -->
                <div>
                    <label class="block font-bold mb-1" for="ornaments">How many Ornaments (Mention Quantity) you have?</label>
                    <input type="number" id="ornaments" name="ornaments" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Motor Vehicle -->
                <div>
                    <label class="block font-bold mb-1" for="vehicle">Do you have any Motor Vehicle?</label>
                    <input type="text" id="vehicle" name="vehicle" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Furniture and Electronics -->
                <div>
                    <label class="block font-bold mb-1" for="furniture">Your Furniture and Electronic Items values</label>
                    <input type="number" id="furniture" name="furniture" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Financial Assets -->
                <div>
                    <label class="block font-bold mb-1" for="financial_assets">Do you have any financial asset? (Share/Sanchaypatra/DPS/FD/Loan Given)</label>
                    <input type="text" id="financial_assets" name="financial_assets" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Land or House -->
                <div>
                    <label class="block font-bold mb-1" for="land_house">Do you have any land or house in your name?</label>
                    <input type="text" id="land_house" name="land_house" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
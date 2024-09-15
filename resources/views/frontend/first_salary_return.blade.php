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
            <h1 class="text-2xl font-bold text-center mb-6">First Salary Return Form</h1>

            <form action="{{ route('first-salary-return.store') }}" method="POST" class="space-y-4">
                @csrf
                <!-- Name -->
                <div>
                    <label class="block font-bold mb-1" for="name">Name</label>
                    <input type="text" id="name" 
                        name="name"
                        class="w-full p-2 border border-gray-300 rounded-lg" 
                        value="{{ old('name') }}" 
                        required>
                </div>

                <!-- NID -->
                {{-- <div>
                    <label class="block font-bold mb-1" for="nid">NID</label>
                    <input type="text" id="nid" name="nid"
                        class="w-full p-2 border border-gray-300 rounded-lg" value="{{ old('nid') }}">
                </div> --}}

                <div>
                    <label class="block font-bold mb-1" for="nid">NID</label>
                    <input type="text" id="nid" 
                        name="nid"
                        class="w-full p-2 border border-gray-300 rounded-lg 
                        @error('nid') border-red-500 @enderror" 
                        value="{{ old('nid') }}">
                    @error('nid')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- DOB -->
                <div>
                    <label class="block font-bold mb-1" for="dob">Date of Birth</label>
                    <input type="date" id="dob" 
                        name="dob"
                        class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <!-- ETIN -->
                {{-- <div>
                    <label class="block font-bold mb-1" for="etin">ETIN</label>
                    <input type="text" id="etin" name="etin" class="w-full p-2 border border-gray-300 rounded-lg">
                </div> --}}

                <!-- ETIN -->
                <div>
                    <label class="block font-bold mb-1" for="etin">ETIN</label>
                    <input type="text" id="etin" 
                        name="etin" value="{{ old('etin') }}"
                        class="w-full p-2 border border-gray-300 rounded-lg 
                    @error('etin') border-red-500 
                    @enderror">

                    @error('etin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        <!-- Display error message if ETIN is not valid -->
                    @enderror
                </div>


                <!-- Circle -->
                <div>
                    <label class="block font-bold mb-1" for="circle">Circle</label>
                    <input type="text" id="circle" 
                        name="circle"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('circle') }}">
                </div>

                <!-- Taxes Zone -->
                <div>
                    <label class="block font-bold mb-1" for="taxes_zone">Taxes Zone</label>
                    <input type="text" id="taxes_zone" n
                        ame="taxes_zone"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('taxes_zone') }}">
                </div>

                <!-- Assessment Year (default) -->
                <div>
                    <label class="block font-bold mb-1" for="assessment_year">Assessment Year</label>
                    <input type="text" id="assessment_year" 
                        name="assessment_year"
                        class="w-full p-2 border border-gray-300 rounded-lg" 
                        value="2024-25" readonly>
                </div>

                <!-- Wife/Husband Name & TIN -->
                <div>
                    <label class="block font-bold mb-1" for="spouse">Wife/Husband Name & TIN (if spouse is a
                        Taxpayer)</label>
                    <input type="text" id="spouse" 
                        name="spouse"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('spouse') }}">
                </div>

                <!-- Address -->
                <div>
                    <label class="block font-bold mb-1" for="address">Address</label>
                    <input type="text" id="address" 
                        name="address"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('address') }}">
                </div>

                <!-- Telephone -->
                <div>
                    <label class="block font-bold mb-1" for="telephone">Telephone</label>
                    <input type="text" id="telephone" 
                        name="telephone"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('telephone') }}">
                </div>

                <!-- Mobile -->
                <div>
                    <label class="block font-bold mb-1" for="mobile">Mobile</label>
                    <input type="text" id="mobile" 
                        name="mobile"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('mobile') }}">
                </div>

                <!-- Email -->
                <div>
                    <label class="block font-bold mb-1" for="email">Email</label>
                    <input type="email" id="email" 
                        name="email"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('email') }}">
                </div>

                <!-- Past Life Savings -->
                <div>
                    <label class="block font-bold mb-1" for="past_savings">What amount you want to show as past life
                        savings?</label>
                    <input type="number" id="past_savings" 
                        name="past_savings"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('past_savings') }}">
                </div>

                <!-- Ornaments (Quantity) -->
                <div>
                    <label class="block font-bold mb-1" for="ornaments">How many Ornaments (Mention Quantity) you
                        have?</label>
                    <input type="number" id="ornaments" 
                        name="ornaments"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('ornaments') }}">
                </div>

                <!-- Motor Vehicle -->
                <div>
                    <label class="block font-bold mb-1" for="vehicle">Do you have any Motor Vehicle?</label>
                    <input type="text" id="vehicle" 
                        name="vehicle"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('vehicle') }}">
                </div>

                <!-- Furniture and Electronics -->
                <div>
                    <label class="block font-bold mb-1" for="furniture">Your Furniture and Electronic Items
                        values</label>
                    <input type="number" id="furniture" 
                        name="furniture"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('furniture') }}">
                </div>

                <!-- Financial Assets -->
                <div>
                    <label class="block font-bold mb-1" for="financial_assets">Do you have any financial asset?
                        (Share/Sanchaypatra/DPS/FD/Loan Given)</label>
                    <input type="text" id="financial_assets" 
                        name="financial_assets"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('financial_assets') }}">
                </div>

                <!-- Land or House -->
                <div>
                    <label class="block font-bold mb-1" for="land_house">Do you have any land or house in your
                        name?</label>
                    <input type="text" id="land_house" 
                        name="land_house"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        value="{{ old('land_house') }}">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Full Return Form HTML</title>
</head>

<body>
    {{-- First Page Start --}}
    <div class="w-[795px] h-[1123px] mx-auto mt-10 mb-7 bg-slate-300 pt-10">        
        {{-- Head Title --}}        
        <div class="text-center">
            <h1 class="font-bold">National Board of Revenue</h1>
        </div>
        <div>
            <p class="font-bold text-center underline">www.nbr.gov.bd</p>
        </div>
        {{-- Table Section --}}
        <div class="mx-8 flex justify-around items-center my-6">
            <div>
                <table class="table-auto border-collapse border border-black">
                    <thead>
                        <tr>
                            <th class="border border-black p-1" colspan="2">For Office Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-black p-1">Serial No. of Return Register</td>
                            <td class="border border-black"></td>
                        </tr>
                        <tr>
                            <td class="border border-black p-1">Volume No. of Return Register</td>
                            <td class="border border-black"></td>
                        </tr>
                        <tr>
                            <td class="border border-black p-1">Date of Return Submission</td>
                            <td class="border border-black min-w-20"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <h1 class="text-xl font-medium">FORM OF RETURN OF INCOME</h1>
                <h1 class="text-xl font-medium">FOR INDIVIDUAL PERSON</h1>
            </div>
        </div>
        {{-- Personal Details --}}
        <div class="mx-8 flex flex-col gap-4 p-8 border border-black">
            <div>
                <p>1. Name of the Taxpayer: ............... {{ $data->name }} ...............</p>
            </div>
            <div>
                <p>2. National ID No. / Passport No. (If No NID): .............. {{ $data->nid }} .......................</p>
            </div>

            {{-- simple html --}}
            {{-- <div class="flex items-center gap-2">
                <span class="mr-20">3. TIN:</span>
                <table class="table-fixed border-collapse border border-black">
                    <tr>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black text-center">-</td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black text-center">-</td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                    </tr>
                </table>
            </div> --}}

            {{-- Dynamic content --}}
            <div class="flex items-center gap-2">
                <span class="mr-20">3. TIN:</span>
                <table class="table-fixed border-collapse border border-black">
                    <tr>
                        @php
                            // Split the ETIN into an array of characters
                            $etinArray = str_split($data->etin ?? '');
                        @endphp
                        
                        @for ($i = 0; $i < 12; $i++) <!-- Total 12 cells for ETIN -->
                            <td class="w-8 h-8 border border-black text-center">
                                @if (isset($etinArray[$i])) <!-- Display each character -->
                                    {{ $etinArray[$i] }}
                                @else
                                    &nbsp; <!-- Empty space if ETIN is shorter -->
                                @endif
                            </td>
                        @endfor
                    </tr>
                </table>
            </div>
            
            
            
            <div>
                <p>4. (a) Circle: ....{{ $data->circle }}............................ (b) Taxes Zone:
                    ..........{{ $data->taxes_zone }}.................................</p>
            </div>
            <div>
                <p>5. Assessment Year: .............................. 6. Residential Status: Resident  / Non-resident 
                </p>
            </div>
            <div>
                <p>7. Taxpayer’s Status: <span class="ml-5 mr-5">Individual  </span> <span class="mr-5">Firm </span>
                    <span class="mr-5">Hindu Undivided Family </span> <span>Others </span>
                </p>
            </div>
            <div>
                <p>8. Tick on the box for getting special benefit:</p>
                <p class="ml-6"><span class="mr-5">A gazette war-wounded freedom fighter </span> <span
                        class="mr-5">Female </span> <span class="mr-5">Third gender </span></p>
                <p class="ml-6"><span class="mr-5">Disable person </span> <span class="mr-5">Aged 65 years or
                        more </span> <span>A parent of a person with disability </span></p>
            </div>
            <div class="flex items-center gap-2">
                <span class="mr-20">9. Date of Birth (DD MM YYYY)</span>
                <table class="table-fixed border-collapse border border-black">
                    <tr>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black text-center">-</td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black text-center">-</td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                    </tr>
                </table>
            </div>
            <div>
                <p>10. Wife/Husband's Name: …………………………………………………………………...</p>
                <p class="ml-6">TIN (if spouse is a Taxpayer): ……………………………………………………………</p>
            </div>
            <div>
                <p>11. Address:
                    ....................................................................................................................................................................
                </p>
                <p class="ml-24">
                    ..................................................................................................................................................................
                </p>
                <p class="ml-24">Telephone: ................................... Mobile:
                    .................................... e-mail: ….....................….</p>
            </div>
            <div>
                <p>12. If employed, employer’s name (latest employer’s name in case of multiple employment):</p>
                <p class="ml-24">
                    .......................................................................................................................................................................
                </p>
                <p class="ml-24">
                    .......................................................................................................................................................................
                </p>
            </div>
            <div>
                <p>13. (a) Name of Organization:
                    ..............................................................................................................
                </p>
                <p class="ml-6">(b) Business Identification number (BIN):
                    ..................................................................................
                </p>
            </div>
            <div>
                <p>14. Name and TIN of Partners / Members in case of Firm / Association of Persons:</p>
                <p class="ml-24">
                    .......................................................................................................................................................................
                </p>
                <p class="ml-24">
                    .......................................................................................................................................................................
                </p>
            </div>
        </div>

    </div>
    {{-- First Page End --}}


    {{-- Second Page Start --}}
    <div class="w-[795px] h-[1123px] mt-10 mx-auto bg-red-300 pt-10">
        <div class="mx-8 flex flex-col gap-4 p-8 ">
            <div>
                <p class="font-bold text-center">Statement of Income and Tax during the Income Year ended on
                    ..........................</p>
            </div>
            <div class="flex justify-between">
            <div>
                <p class="font-semibold">Name of the Taxpayer: ...............................</p>
            </div>
            <div class="flex justify-center items-center gap-2 mx-auto">
                <span>TIN:</span>
                <table class="table-fixed border-collapse border border-black">
                    <tr>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black text-center">-</td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black text-center">-</td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                        <td class="w-6 h-6 border border-black"></td>
                    </tr>
                </table>
            </div>
            </div>

            <!-- Table for Income Details -->
            <div>
                <div class="flex justify-between font-medium">
                    <div>
                        <p>Particulars of Income</p>
                    </div>
                    <div>
                        <p>Amount in Taka</p>
                    </div>
                </div>
                <table class="w-full border-collapse border border-black text-xs font-medium">
                    <tbody>
                        <tr>
                            <td class="border border-black px-2 py-1">1. Income from Employment (annex Schedule 1)</td>
                            <td class="border border-black px-2 py-1 min-w-72"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">2. Income from Rent (annex Schedule 2)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">3. Income from Agriculture (annex Schedule 3)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">4. Income from Business (annex Schedule 4)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">5. Income from Capital Gain</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">6. Income from Financial Assets (Bank Interest,
                                Dividend, Securities Profit etc)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">7. Income from Other Sources (Royalty, License
                                Fees, Honorarium, Govt. Incentive etc.)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">8. Share of Income from Firm or AoP</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">9. Income of Minor or Spouse (if not Taxpayer)
                            </td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">10. Taxable Income from Abroad</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1 font-bold">11. Total Income (Aggregate of Serial 1
                                to 10)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- Table for Tax Computation -->
            <div>
                <div class="flex justify-between font-semibold">
                    <div>
                        <p>Tax Computation</p>
                    </div>
                    <div>
                        <p>Amount in Taka</p>
                    </div>
                </div>
                <table class="w-full border-collapse border border-black text-xs font-medium">
                    <tbody>
                        <tr>
                            <td class="border border-black px-2 py-1">12. Gross Tax on Taxable Income</td>
                            <td class="border border-black px-2 py-1 min-w-72"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">13. Tax Rebate (annex Schedule 5)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">14. Net Tax after Rebate (12 – 13) </td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">15. Minimum Tax</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">16. Tax Payable (Higher of 14 and 15)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">17. (a) Net Wealth Surcharge (if applicable)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1 pl-7">(b) Environmental Surcharge (if applicable)
                            </td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">18. Delay Interest, Penalty or any other amount 
                                Under Income Tax Act (if any)
                                </td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-2 py-1">19. Total Amount  Payable (16 + 17 + 18)</td>
                            <td class="border border-black px-2 py-1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    {{-- Second Page End --}}



    <div class="text-center">
        <button onclick="window.print()" class="bg-green-500 rounded text-xl">Print</button>
    </div>
</body>

</html>

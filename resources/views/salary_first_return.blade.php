<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div  class="w-[795px] mx-auto bg-slate-300">
        <header>
            {{-- Head Title --}}
            <div class="text-center">
                <h1 class="font-bold">National Board of Revenue</h1>
            </div>
            <div>
                <h1 class="font-bold text-center underline">www.nbr.gov.bd</h1>
            </div>
            {{-- Table Section --}}
            <div class="mx-8 flex justify-around items-center my-6">
                <div>
                    <table class="table-auto border-collapse border-2 border-black">
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
            <div class="mx-8 flex flex-col gap-2">
                <div>
                    <p>1. Name of the Taxpayer: …….........................................................................................................</p>
                </div>
                <div>
                    <p>2. National ID No. / Passport No.  (If No NID): .............................................................................</p>
                </div>
                <div class="flex items-center gap-2">
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
                  </div>
                  <div>
                    <p>4. (a) Circle:  ............................................ (b) Taxes Zone: ...........................................................</p>
                  </div>
                  <div>
                    <p>5. Assessment Year: ..............................   6. Residential Status:  Resident  / Non-resident </p>
                  </div>
                  <div>
                    <p>7. Taxpayer’s Status: <span class="ml-5 mr-5">Individual  </span> <span class="mr-5">Firm </span> <span class="mr-5">Hindu Undivided Family </span> <span>Others </span></p>
                  </div>
                  <div>
                    <p>8. Tick on the box for getting special benefit:</p>
                    <p class="ml-6"><span class="mr-5">A gazette war-wounded freedom fighter  </span> <span class="mr-5">Female </span> <span class="mr-5">Third gender  </span></p>
                    <p class="ml-6"><span class="mr-5">Disable person  </span> <span class="mr-5">Aged 65 years or more </span> <span>A parent of a person with disability </span></p>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="mr-20">9. Date of Birth (DD MM YYYY)</span>
                    <table class="table-fixed border-collapse border border-black">
                      <tr>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black text-center">-</td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black text-center">-</td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                        <td class="w-8 h-8 border border-black"></td>
                      </tr>
                    </table>
                  </div>
                  <div>
                    <p>10. Wife/Husband's Name: …………………………………………………………………...</p>
                    <p class="ml-6">TIN (if spouse is a Taxpayer): ……………………………………………………………</p>
                  </div>
                  <div>
                    <p>11. Address: ....................................................................................................................................................................</p>
                    <p class="ml-24">..................................................................................................................................................................</p>
                    <p class="ml-24">Telephone: ...................................  Mobile: .................................... e-mail: ….....................….</p>
                  </div>
                  <div>
                    <p>12. If employed, employer’s name (latest employer’s name in case of multiple employment):</p>
                    <p class="ml-24">.......................................................................................................................................................................</p>
                    <p class="ml-24">.......................................................................................................................................................................</p>
                  </div>
                  <div>
                    <p>13. (a) Name of Organization: .......................................................................................................................................</p>
                    <p class="ml-6">(b) Business Identification number (BIN): ...........................................................................................................</p>
                  </div>
                  <div>
                    <p>14. Name and TIN of Partners / Members in case of Firm / Association of Persons:</p>
                    <p class="ml-24">.......................................................................................................................................................................</p>
                    <p class="ml-24">.......................................................................................................................................................................</p>
                  </div>
            </div>
        </header>
    </div>
</body>
</html>
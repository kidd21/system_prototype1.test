

<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        RESIDENCE
    </h2>
</header>

<!--Name-->
<form method="POST" action="/listings" enctype="multipart/form-data">
    
    <div class="flex  space-x-4">
        
            <label
            class="inline-block mb-2 italic">
            Indicate your place of residence with a check.
            </label>
        
    </div>

    <table class="table-fixed border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
          <tr style="background-color: powderblue;">
            <th class="w-400"></th>
            <th class="border border-gray-400 px-0 py-2 w-44">Grade 7</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 ">Family Home</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
          </tr>
          <tr>
            <td class="border border-gray-400 ">Guardian's Home</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">School Dormitory</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">Others:<i> (please specify)</i></td>
            <td><input
                type="text"
                class="w-full"
                name="others_home"
                value="{{old('others_home')}}"
            /></td>
            
          </tr>
        </tbody>
    </table>

     <div class="flex  space-x-4">
        
            <label
            class="inline-block mt-10 mb-2 italic"><b>
            (for externs only)</b>
            </label>
        
      </div>

      <div class="flex  space-x-4">
        <div>
            <label
            class="inline-block mt-2 mb-2 italic">
            How do you go to school?
            </label>
        </div>
      </div>

      <table class="table-fixed border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
          <tr style="background-color: powderblue;">
            <th class="w-400"></th>
            <th class="border border-gray-400 px-0 py-2 w-44">Grade 7</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 ">Public transportation</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">Family-owned vehicle</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">Car-pool</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">Service</td>
            <td class="border border-gray-400 px-20 py-0"><input type="checkbox" class="rounded"/></td>
            
          </tr>
            
          </tr>
          <tr>
            <td class="border border-gray-400 ">Others:<i> (please specify)</i></td>
            <td><input class="w-full"
                type="text"
                name="others_transpo"
                value="{{old('others_transpo')}}"/>
            </td>
            
          </tr>
        </tbody>
      </table>
 

    
</form>
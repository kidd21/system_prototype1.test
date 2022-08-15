
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        EXTRA CURRICULAR ACTIVITIES
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">

<!--POSITION HELD IN SCHOOL/OFF-CAMPUS ORGANIZATIONS-->    
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-20">
        POSITION HELD IN SCHOOL/OFF-CAMPUS ORGANIZATIONS
    </div>
</div>

    <table class=" border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
          <tr style="background-color: powderblue;">
            <th class="w-12"></th>
            <th class="border border-gray-400 px-0 py-2 w-44">POSITION
                <div class="font-medium text-gray-500 italic">(President, Vice Pres., Member, etc.)</div>
            </th>
            <th class="border border-gray-400 px-0 py-2 w-44">ORGANIZATION/CLUB</th>
            
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
            <td class="border border-gray-400 ">
                <div class="grid grid-cols-1 divide ">
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position1_org"
                            value="{{old('A_position1_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position2_org"
                            value="{{old('A_position2_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position3_org"
                            value="{{old('A_position3_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position4_org"
                            value="{{old('A_position4_org')}}"/>
                    </div>
                  </div>
            </td>
            <td class="border border-gray-400 ">
                <div class="grid grid-cols-1 divide ">
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization1_org"
                            value="{{old('A_organization1_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization2_org"
                            value="{{old('A_organization2_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization3_org"
                            value="{{old('A_organization3_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization4_org"
                            value="{{old('A_organization4_org')}}"/>
                    </div>
                  </div>
            </td>
          </tr>
          
        </tbody>
    </table>

<!--INVOLVEMENT IN ACTIVITIES/PROJECTS IN/OFF CAMPUS-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        INVOLVEMENT IN ACTIVITIES/PROJECTS IN/OFF CAMPUS
    </div>
</div>

<table class=" border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-44">ACTIVITY</th>
    <th class="border border-gray-400 px-0 py-2 w-44">EXTENT OF ACTIVITY
        <div class="font-medium text-gray-500 italic">(International, National, School-wide, Year level, others)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">NATURE OF INVOLVEMENT
        <div class="font-medium text-gray-500 italic">(Organizer, Representative, Participant)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity1_org"
                    value="{{old('B_activity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity2_org"
                    value="{{old('B_activity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity3_org"
                    value="{{old('B_activity3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity4_org"
                    value="{{old('B_activity4_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity1_org"
                    value="{{old('B_extentofactivity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity2_org"
                    value="{{old('B_extentofactivity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity3_org"
                    value="{{old('B_extentofactivity3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity4_org"
                    value="{{old('B_extentofactivity4_org')}}"/>
            </div>
          </div>
          
    </td> 
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement1_org"
                    value="{{old('B_natureofinvolvement1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement2_org"
                    value="{{old('B_natureofinvolvement2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement3_org"
                    value="{{old('B_natureofinvolvement3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement4_org"
                    value="{{old('B_natureofinvolvement4_org')}}"/>
            </div>
          </div>
          
    </td> 
        
  </tr>
  
</tbody>
</table>

<!--SPECIAL ACADEMIC HONORS/AWARDS/DISTINCTIONS RECIEVED-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        SPECIAL ACADEMIC HONORS/AWARDS/DISTINCTIONS RECIEVED
    </div>
</div>

<table class=" border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-44">AWARD</th>
    <th class="border border-gray-400 px-0 py-2 w-44">ACTIVTY/COMPETITION/etc.</th>
    <th class="border border-gray-400 px-0 py-2 w-44">CLASSIFICATION
        <div class="font-medium text-gray-500 italic">(International, National, Regional, School-wide, etc.)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award1_org"
                    value="{{old('C_award1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award2_org"
                    value="{{old('C_award2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award3_org"
                    value="{{old('C_award3_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity1_org"
                    value="{{old('C_activity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity2_org"
                    value="{{old('C_activity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity3_org"
                    value="{{old('C_activity3_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c1_org"
                    value="{{old('C_c1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c2_org"
                    value="{{old('C_c2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c3_org"
                    value="{{old('C_c3_org')}}"/>
            </div>
            
          </div>
    </td>
  </tr>
  
</tbody>
</table>

<!--PARTICIPATION IN SEMINARS/CONFERENCE/CONTESTS/COMPETITIONS-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        PARTICIPATION IN SEMINARS/CONFERENCE/CONTESTS/COMPETITIONS
    </div>
</div>

<table class="border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-60">TITLE
        <div class="font-medium text-gray-500 italic">(Seminar, Conference, Contest, Competition)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">SPONSORING AGENCY/DATE HELD</th>
    <th class="border border-gray-400 px-0 py-2 w-48">SCOPE
        <div class="font-medium text-gray-500 italic">(International, National, Regional, School-wide, etc.)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">NATURE OF INVOLVEMENT
        <div class="font-medium text-gray-500 italic">(Speaker, Facilitator, Participant, Team captain, Member)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title1_org"
                    value="{{old('D_title1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title2_org"
                    value="{{old('D_title2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title3_org"
                    value="{{old('D_title3_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring1_org"
                    value="{{old('D_sponsoring1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring2_org"
                    value="{{old('D_sponsoring2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring3_org"
                    value="{{old('D_sponsoring3_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement1_org"
                    value="{{old('D_involvement1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement2_org"
                    value="{{old('D_involvement2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement3_org"
                    value="{{old('D_involvement3_org')}}"/>
            </div>
            
          </div>
    </td>
  </tr>
  
</tbody>
</table>
      
 

    
</form>
@extends('layouts.app')

@section('content')
   <div class="bg-blue-300">
       <div class="homeslide-images h-full" style="background-image: url('../images/image1.jpg');min-height:100vh;background-size:cover;background-position:center;background-repeat:no-repeat">
        
       </div>
       {{-- end section A  --}}
       <div class="grid lg:grid-cols-3 justify-items-center gap-6 mt-8 items-center">
           <div class="card ">
               <span class="card-header ">match report</span>
               <img src="../images/matchreport.jpg" alt="matchreport" class="object-cover w-full h-60">
               <p class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eos sit illo, unde quos quo dolore qui quisquam tempore ipsa.</p>
           </div>
           {{-- end match report card  --}}

           <div class="card">
               <span class="card-header">hightlights</span>
               <video  controls>
                <source src="../videos/match.mp4" type="video/mp4" class="h-60 w-full object-cover" >
             </video>               
           </div>
           {{-- end highlights  --}}

           <div class="card-red ">
               <span class="card-header">upcoming fixtures</span>
               <table class="text-center table w-96 h-60" >
                <tr>
                   <th>Date</th>
                   <th>Match</th>
                   <th>Venue</th>
                   <th>Time</th>
                </tr>
                <tr class="row-td">
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>H</td>
                   <td>1700hrs</td>
                </tr>
                <tr class="row-td" >
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>A</td>
                   <td>1700hrs</td>
                </tr>
                <tr  class="row-td">
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>H</td>
                   <td>1700hrs</td>
                </tr>
                <tr class="row-td" >
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>A</td>
                   <td>1700hrs</td>
                </tr>
                <tr class="row-td">
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>H</td>
                   <td>1700hrs</td>
                </tr>
                <tr class="row-td">
                   <td>01/12/20</td>
                   <td>Bandari vs Afc</td>
                   <td>A</td>
                   <td>1700hrs</td>
                </tr>
             </table>
           </div>
           {{-- end fixtures card  --}}
           
       </div>

       {{-- end section B  --}}
    <div>
        <div class="flex flex-wrap justify-center mt-8 py-8 bg-gradient-to-r from-blue-500 via-red-500 to-white">
            <h1 class="text-3xl font-bold uppercase">our stripes</h1>
        </div>
       <div class="grid lg:grid-cols-3 gap-6 mt-8 justify-items-center">

            <div class="relative rounded-lg bg-blue-700 w-96">
                <span class="uppercase font-bold text-white text-xl flex justify-center">home kit</span>
                <img src="../images/stripe.jpg" alt="stripe 1" class=" img-fluid">
                <button class="btn-card"> <a href="/shop" >shop now!</a> </button>

            </div>
            {{-- end home stripe  --}}

            <div class="relative rounded-lg bg-red-700 w-96">
                <span class="uppercase font-bold text-white text-xl flex justify-center">away kit</span>
                <img src="../images/stripe2.jpg" alt="stripe 1" class=" img-fluid">
                <button class="btn-card"> <a href="/shop" >shop now!</a> </button>


            </div>
            {{-- end away stripe  --}}

            <div class="relative rounded-lg bg-gray-200 w-96">
                <span class="uppercase font-bold text-gray-900 text-xl flex justify-center">third kit</span>
                <img src="../images/stripe3.jpg" alt="stripe 1" class=" img-fluid">
                <button class="btn-card"> <a href="/shop" >shop now!</a> </button>


            </div>
            {{-- end third stripe  --}}
       </div>
    </div>   
       {{-- end section C  --}}


    <div class="mt-24" style="background-image: url('../images/image5.jpg');min-height:80vh;background-position:center;background-size:cover;opacity:.9;">
        <div class="flex flex-wrap justify-center mt-12 py-7 bg-gradient-to-r from-blue-500 via-red-500 to-white">
            <h1 class="text-3xl font-bold uppercase">top stories</h1>
        </div>
       <div class="grid  lg:grid-cols-3 gap-6 mt-8 justify-items-center">

        <div class="card ">
            <img src="../images/matchreport.jpg" alt="matchreport" class="object-cover w-full h-80 ">
            <h2 class="font-bold  mb-0 flex justify-center capitalize text-xl">bad day in office</h2>

            <p class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Ea eos sit illo, unde quos quo dolore qui quisquam tempore ipsa.
                Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt temporibus totam consectetur quo provident corrupti culpa dolore magnam quisquam. </p>
        </div>
            {{-- end story 1  --}}

            <div class="card ">
                <img src="../images/matchreport.jpg" alt="matchreport" class="object-cover w-full h-80 ">
                <h2 class="font-bold  mb-0 flex justify-center capitalize text-xl">bad day in office</h2>
 
                <p class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ea eos sit illo, unde quos quo dolore qui quisquam tempore ipsa.
                    Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt temporibus totam consectetur quo provident corrupti culpa dolore magnam quisquam. </p>
            </div>
            {{-- end story 2  --}}

            <div class="card ">
                <img src="../images/matchreport.jpg" alt="matchreport" class="object-cover w-full h-80 ">
                <h2 class="font-bold  mb-0 flex justify-center capitalize text-xl">bad day in office</h2>

                <p class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ea eos sit illo, unde quos quo dolore qui quisquam tempore ipsa.
                    Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt temporibus totam consectetur quo provident corrupti culpa dolore magnam quisquam. </p>
            </div>
            {{-- end story 3  --}}
       </div>
    </div>   
       {{-- end section D  --}}
<div class="flex flex-wrap justify-center mt-8 items-center ">
       <div class="w-3/4 items-center pt-12 " style="background-image: url('../images/bandari.jpg');min-height:30vh;background-position:center;background-size:cover;opacity:.8;">
        <h1 class="uppercase font-bold flex justify-center text-3xl">stay upto date with the dockers</h1>
        <p class="flex justify-center font-semibold text-lg text-white">Get exclusive access to the latest news and promotions.</p>
        <div class=" ">
           <form action="post">
              <div class="flex justify-center">
                 <input type="text" class="bg-white w-96 h-8 focus:outline-none focus:bg-gray-100 text-gray-900 rounded-md" placeholder="Your Email address" name="email">
              </div>
           </form>
        </div>
     </div>
</div>   
     {{-- end section E --}}
   </div> 
@endsection
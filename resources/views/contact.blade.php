<x-layout>
    <x-slot name='title'>Home</x-slot> 
     <x-slot name='content'>
         <div class="container mt-5 text-white">
             <h1 class="text-warning mb-5 border-bottom"> CONTACT US</h1>
             <div class="text-warnign mb-5">
                 <p class="mx-auto mb-5">
                     Do you have any questions? Please do not hesitate to contact. I will come back to you within a matter of hours to help you.
                 </p>
                 <div class="col-sm-9 mb-5">
                 <form action="">
                     <div class="row g-3">
                         <div class="col-md-6">
                          <label for="inputName">Your Name</label>  
                          <input type="text" class="from-control mt-2" id="inputName"/>
                         </div> 
                        <div class="col-md-6">
                           <label for="inputEmail">Your Email</label> 
                           <input type="email" class="form-control mt-2" id="inputEmail"/>
                        </div> 
                    <div class="col-md-12 mb-3">
                     <label for="inputTextarea">Your message</label>
                     <textarea class="form-control mt-2" id="inputTextarea" required></textarea>
                     </div>
             </div>
              <button class="btn btn-primary" type="submit">Submit</button>
                 </form>
                 </div>
                 <div  class="col-sm-3 text-center">
                     <ul class="list-unstyled">
                         <li><i class="fas fa-map-marker-alt fa-2x i-color"></i>
                         <p>Mumbai,Maharashtra,India</p>
                         </li>
                         <li>
                             <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                             <p>+ 91 9000000000</p>
                         </li>
                         <li>
                             <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                             <p>abdulkalamtrust@gov.com</p>
                         </li>
                     </ul>
                 </div>
         </div>
     </x-slot>
 </x-layout>
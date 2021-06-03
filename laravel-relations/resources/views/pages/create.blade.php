@extends('layouts.main-layout')

@section('content')
     <main>
          <form class="form" action="/">
               <fieldset>
                    @csrf
                    @method('POST')
                   <legend>New Pilot Form</legend>
                   <h3>Contact information</h2>
                   <ul>
                       <li>
                           <label for="name">
                               <span>Name: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="name" id="name">
                       </li>

                       <li>
                           <label for="lastname">
                               <span>Lastname: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="lastname" id="lastname">
                       </li>

                       <li>
                           <label for="nationality">
                               <span>Nationality: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="nationality" id="nationality">
                       </li>

                       <li>
                           <label for="date_of_birth">
                              <span>Date of Birth: </span>
                              <abbr title="required">*</abbr>
                           </label>
                           <input type="date" name="date_of_birth" id="date_of_birth">
                       </li>

                       <li>
                         <input class="submit" type="submit" placeholder="CREATE">
                       </li>

                   </ul>

               </fieldset>
           </form>
     </main>
@endsection
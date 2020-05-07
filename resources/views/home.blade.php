@extends('layouts.app')

@section('content')

    <div class="main-banner is-overlay" id="bg-img">
        <div class="overlay"></div>
        <div class="container is-fluid columns">
            <div class="banner-content " >
            
               <div class="columns ">
                   <div class="column">
                        <h1 class="title is-1 m-b-50">Paper Plus</h1>
                        <h2 class="subtitle is-4">Paper Plus  that helps you from the start until you obtain the franchise and accept your research and message. </h2>

                        <button class="button is-primary is-large ">
                            <span class="icon ">
                                <i class="fa fa-clock-o fa-lg"></i>

                            </span>
                            <span class="btn-title p-l-5">Order Now</span></button>
                   </div>
                   <div class="column is-offset-1">
                        <div class="get-qoute">
                            <div class="card">
                                <div class="card-header">
                                  
                                    <div class="card-header-title is-centered is-1">
                                        <i class="fa fa-calculator p-r-10"></i>Calculate Price</div>
                                </div>
                                <div class="card-content">
                                    <div class="field is-horizontal">
                                        <div class="field-label">
                                            <label class="label p-t-5">ACADEMIC LEVEL</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field ">
                                                <div class="control ">
                                                    <div class="select is-fullwidth is-primary">
                                                        <select>
                                                          <option>Business development</option>
                                                          <option>Marketing</option>
                                                          <option>Sales</option>
                                                        </select>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- start type paper -->
                                    <div class="field is-horizontal">
                                        <div class="field-label">
                                            <label class="label p-t-5">Type Paper</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field ">
                                                <div class="control ">
                                                    <div class="select is-fullwidth is-primary">
                                                        <select>
                                                          <option>Business development</option>
                                                          <option>Marketing</option>
                                                          <option>Sales</option>
                                                        </select>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end type paper -->

                                     <!-- start Dealline -->
                                     <div class="field is-horizontal">
                                        <div class="field-label">
                                            <label class="label p-t-5">Deadline</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field ">
                                                <div class="control ">
                                                    <div class="select is-fullwidth is-primary">
                                                        <select>
                                                          <option>6 hours</option>
                                                          <option>12 hours</option>
                                                          <option>1 Day</option>
                                                          <option>2 Days</option>
                                                          <option>3 Day</option>
                                                        </select>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Dealline -->
                                    
                                     <!-- start Dealline -->
                                     <div class="field is-horizontal">
                                        <div class="field-label">
                                            <label class="label p-t-5">Pages</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field  is-narrow">
                                                <div class="control ">
                                                    <input type="number" class="input" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Dealline -->
                                </div>

                                <div class="card-footer">
                                    <div class="footer-actions">

                                      <span class="get-price p-r-20">  Your total price: 200$ </span>  <button class="button is-primary is-large">Get Price</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
        </div>
    </div>

@endsection

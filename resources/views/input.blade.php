@extends('layout.master')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">AHP Input</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Bikin table disini-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 mt-5">
                    <h2 class="text-white mb-4">Mulai buat table dari sini</h2>
            <style>
                table, th, tr, td, p {
                border-collapse: collapse;
                color: rgb(71, 71, 71);
                }
            </style>
<br>
        <p>Criteria</p>
        <form>
            <div class="form-group">
                <label>How many criteria</label>
                <select name="code" class="form-control">
                  <option disabled selected>Select Code</option>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-lg mb-1" onclick="">
                Add Criteria
              </button>
        </form>
          <br>
          <br>
        <table style="width:100%">
            <tr>
                <th>Code</th>
                <th>Criteria name</th> 

            </tr>
            <tr>
                <td>c1</td>
                <td>Step volume</td>
                            
            </tr>
            </table>

<br>
<br>
<br>
            <p>Alternative</p>
            <form action="/alternativeadd" method="POST">
                @csrf
                <div class="form-group">
                    <label>Add Alternative</label>
                    <select name="code" class="form-control">
                      <option disabled selected>Select Code</option>
                        @for ($i = 0; $i <= 10; $i++)
                            <option value="a{{$i}}">A{{$i}}</option>
                        @endfor
                    </select>
                    <label>Alternative Name</label>
                    <input type="text" class="form-control">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary btn-lg mb-1">
                    Add Alternative
                  </button>
            </form>
            <br>
                <table style="width:100%">
                    <tr>
                        <th>Code</th>
                        <th>Criteria name</th> 
                
                </tr>
                    <tr>
                        <td>A1</td>
                        <td>Suzuki GSX-S150</td>
                        
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Honda CB150R</td>
                        
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Honda PCX 150</td>
                        
                    </tr>

                    <tr>
                        <td>A4</td>
                        <td>Honda N-max</td>
                        
                    </tr>

                    <tr>
                        <td>A5</td>
                        <td>Yamaha Aerox</td>
                        
                    </tr>

                    <tr>
                        <td>A6</td>
                        <td>Yamaha Xebre</td>
                        
                    </tr>
                    </table>

                </br>

    <p>Criteria Weight Value</p>

    <table style="width:100%">
            <tr>
                <th>Code</th>
                <th>C1</th> 
                <th>C2</th> 
                <th>C3</th> 
                <th>C4</th> 
                <th>C5</th> 
                <th>C6</th> 
                
            </tr>
        <tr> 
            <td>C1</td>                      
            <td>1</td>
            <td><input type="text" id="c1" onblur="myFunction()"></td>
            <td><input type="text" id="c2" onblur="myFunction()"></td></td>
            <td><input type="text" id="c3" onblur="myFunction()"></td></td>
            <td><input type="text" id="c4" onblur="myFunction()"></td></td>
            <td><input type="text" id="c5" onblur="myFunction()"></td></td>
            
            </tr>
            <tr>
                <td>C2</td>
                <td><input type="text" id="a1" disabled></td>
                <td>1</td>
                <td><input type="text" id="c6" onblur="myFunction()"></td>
                <td><input type="text" id="c7" onblur="myFunction()"></td>
                <td><input type="text" id="c8" onblur="myFunction()"></td>
                <td><input type="text" id="c9" onblur="myFunction()"></td>
                
            </tr>
            
                <tr>
                    <td>C3</td>
                    <td><input type="text" id="a2" disabled></td>
                    <td><input type="text" id="a6" disabled></td>
                    <td>1</td>
                    <td><input type="text" id="c10" onblur="myFunction()"></td>
                    <td><input type="text" id="c11" onblur="myFunction()"></td>
                    <td><input type="text" id="c12" onblur="myFunction()"></td>
                    
            </tr>   

                <tr>
                    <td>c4</td>
                    <td><input type="text" id="a3" disabled></td>
                    <td><input type="text" id="a7" disabled></td>
                    <td><input type="text" id="a10" disabled></td>
                    <td>1</td>
                    <td><input type="text" id="c13" onblur="myFunction()"></td>
                    <td><input type="text" id="c14" onblur="myFunction()"></td>
                </tr>    

                <tr>
                    <td>c5</td>
                    <td><input type="text" id="a4" disabled></td>
                    <td><input type="text" id="a8" disabled></td>
                    <td><input type="text" id="a11" disabled></td>
                    <td><input type="text" id="a13" disabled></td>
                    <td>1</td>
                    <td><input type="text" id="c15" onblur="myFunction()"></td>
                    </tr>                                            
                <tr>
                    <td>c6</td>
                    <td><input type="text" id="a5" disabled></td>
                    <td><input type="text" id="a9" disabled></td>
                    <td><input type="text" id="a12" disabled></td>
                    <td><input type="text" id="a14" disabled></td>
                    <td><input type="text" id="a15" disabled></td>
                    <td>1</td>
                    
                </tr>
        </table>

        </br> 

    <p>Measure the consistency of Criteria</p>
    <p>Crtiteria Comaprison Matrix</p>

    <table style="width:100%">
            <tr>
                <th>Criteria Comparison Matrix</th>
                <th>C1</th> 
                <th>C2</th> 
                <th>C3</th> 
                <th>C4</th> 
                <th>C5</th> 
                <th>C6</th> 
                
            </tr>
        <tr> 
            <td>c1</td>                      
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            

            </tr>
            <tr>
                <td>c2</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                
            </tr>
                <tr>
                    <td>c3</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
            </tr>   

                <tr>
                    <td>c4</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                </tr>    

                    <tr>
                        <td>c5</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        </tr>                                            
                        <tr>
                            <td>c6</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            
                        </tr>
        </table>

        </br>

    <p>Criteria Piority Weight Matrix</p>

    <table style="width:100%">
            <tr>
                <th>Criteria Priority Weight Matrix</th>
                <th>C1</th> 
                <th>C2</th> 
                <th>C3</th> 
                <th>C4</th> 
                <th>C5</th> 
                <th>C6</th> 
                <th>Priority Weight</th>
                <th></th>
                <th>n=</th>
                <th>6</th>
                
            </tr>
        <tr> 
            <td>c1</td>                      
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td> `λmax =    </td>
            <td>            </td>
            

            </tr>
            <tr>
                <td>c2</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                
                
                
            </tr>
                <tr>
                    <td>c3</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
                    
            </tr>   

                <tr>
                    <td>c4</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
                </tr>    

                    <tr>
                        <td>c5</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        
                        </tr>                                            
                        <tr>
                            <td>c6</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            
                            
                        </tr>
        </table>
        </br>
    <p>Criteria Cosistency Matrix</p>

    <table style="width:100%">
            <tr>
                <th>Criteria Cosistency Matrix</th>
                <th>C1</th> 
                <th>C2</th> 
                <th>C3</th> 
                <th>C4</th> 
                <th>C5</th> 
                <th>C6</th> 
                <th>CM</th>
                <th>Average</th>
                <th>Weighted Sum</th>
                <th>WS/Avg</th>
                
            </tr>
        <tr> 
            <td>c1</td>                      
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            
            

            </tr>
            <tr>
                <td>c2</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                
                
                
            </tr>
                <tr>
                    <td>c3</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
                    
            </tr>   

                <tr>
                    <td>c4</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
                </tr>    

                    <tr>
                        <td>c5</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        
                        </tr>                                            
                        <tr>
                            <td>c6</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            
                            
                        </tr>
            </table>
            </br>
        <p>Criteria Piority Weight Matrix</p>

        <table style="width:100%">
                <tr>
                    <th>Criteria Priority Weight Matrix</th>
                    <th>C1</th> 
                    <th>C2</th> 
                    <th>C3</th> 
                    <th>C4</th> 
                    <th>C5</th> 
                    <th>C6</th> 
                    <th>Priority Weight</th>
                    <th></th>
                    <th>n=</th>
                    <th>6</th>
                    
                </tr>
            <tr> 
                <td>c1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td> `λmax =    </td>
                <td>            </td>
                

                </tr>
                <tr>
                    <td>c2</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    
                    
                    
                </tr>
                    <tr>
                        <td>c3</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        
                        
                </tr>   

                    <tr>
                        <td>c4</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        
                    </tr>    

                        <tr>
                            <td>c5</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            
                            </tr>                                            
                            <tr>
                                <td>c6</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                
                                
                            </tr>
        </table>

        </br>
    <table style="width:100%">
            <tr>
                <th>0rdo Matrix</th>
                <th>1</th> 
                <th>2</th> 
                <th>3</th> 
                <th>4</th> 
                <th>5</th> 
                <th>6</th> 
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                
            </tr>
        <tr> 
            <td>01</td>                      
            <td>    0       </td>
            <td>     0      </td>
            <td>  0.58      </td>
            <td>       0.9  </td>
            <td>     1.12   </td>
            <td> 1.2           </td>
            <td> 1.32       </td>
            <td>  1.41          </td>
            <td>   1.46         </td>
            <td>1.49</td>
            
        
        </table>

        </br>
    <table style="width:100%">
            <tr>
                <th>Consistency Index</th>
                <th>.........</th> 
                    
                
                
            </tr>
                <tr> 
                    <td>Ratio Index</td>                      
                    <td>          </td>
                
                </tr>
                    <tr>
                        <td>Consistency Ratio</td>                      
                        <td>          </td>
                        
        </tr>

            

        </table>
        </br>
    <p>Alternative Comparison Matrix Based C1</p>


    <table style="width:100%">
            <tr>
                <th>Alternative Comparison Matrix</th>
                <th>A1</th> 
                <th>A2</th> 
                <th>A3</th> 
                <th>A4</th> 
                <th>A5</th> 
                <th>A6</th>
                
            </tr>
        <tr> 
            <td>A1</td>                      
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>

        </tr>
        <tr>
            <td>A2</td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
        </tr>
        <tr>
            <td>A3</td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
        </tr>   

        <tr>
            <td>A4</td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
        </tr>    

        <tr>
            <td>A5</td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
        </tr>                                            
        <tr>
            <td>A6</td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            <td>            </td>
            
        </tr>
        </table>

            </br>
        <p>Alternative Priority Weight Based C1</p>
    

        <table style="width:100%">
            <tr>
                <th>Alternative Priot=rity Weigth</th>
                <th>A1</th> 
                <th>A2</th> 
                <th>A3</th> 
                <th>A4</th> 
                <th>A5</th> 
                <th>A6</th> 
                <th>Priority Weight</th>
                <th>...</th>
                <th>n=</th>
                <th>6</th>
                
            </tr>
            <tr> 
                <td>A1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>

            </tr>
            <tr>
                <td>A2</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
            </tr>
            <tr>
                <td>A3</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
            </tr>   

            <tr>
                <td>A4</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
            </tr>    

            <tr>
                <td>A5</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
            </tr>                                            
            <tr>
                <td>A6</td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                
            </tr>
            </table>

            </br>

        <p>Alternative Comparison Matrix Based A2</p>
    

        <table style="width:100%">
                <tr>
                    <th>Alternative Comparison Matrix</th>
                    <th>A1</th> 
                    <th>A2</th> 
                    <th>A3</th> 
                    <th>A4</th> 
                    <th>A5</th> 
                    <th>A6</th> 
                    <th>....</th>
                    
                </tr>
            <tr> 
                <td>A1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>

                </tr>
                <tr>
                    <td>A2</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                </tr>
                    <tr>
                        <td>A3</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                </tr>   

                    <tr>
                        <td>A4</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>    

                        <tr>
                            <td>A5</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            </tr>                                            
                            <tr>
                                <td>A6</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                
                            </tr>
            </table>

            </br>

        <p>Alternative Priority Weight Based A2</p>
    

        <table style="width:100%">
                <tr>
                    <th>Alternative Priot=rity Weigth</th>
                    <th>A1</th> 
                    <th>A2</th> 
                    <th>A3</th> 
                    <th>A4</th> 
                    <th>A5</th> 
                    <th>A6</th> 
                    <th>Priority Weight</th>
                    <th>...</th>
                    
                    
                </tr>
            <tr> 
                <td>A1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>

                </tr>
                <tr>
                    <td>A2</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                </tr>
                    <tr>
                        <td>A3</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                </tr>   

                    <tr>
                        <td>A4</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>    

                        <tr>
                            <td>A5</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            </tr>                                            
                            <tr>
                                <td>A6</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                
                            </tr>
            </table>

            </br>
        <p>Alternative Comparison Matrix Based A3</p>
    

        <table style="width:100%">
                <tr>
                    <th>Alternative Comparison Matrix</th>
                    <th>A1</th> 
                    <th>A2</th> 
                    <th>A3</th> 
                    <th>A4</th> 
                    <th>A5</th> 
                    <th>A6</th> 
                    <th>....</th>
                    
                </tr>
            <tr> 
                <td>A1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>

                </tr>
                <tr>
                    <td>A2</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                </tr>
                    <tr>
                        <td>A3</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                </tr>   

                    <tr>
                        <td>A4</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>    

                        <tr>
                            <td>A5</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            </tr>                                            
                            <tr>
                                <td>A6</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                
                            </tr>
            </table>

                </br>
            <p>Alternative Priority Weight Based A3</p>
        

            <table style="width:100%">
                    <tr>
                        <th>Alternative Priot=rity Weigth</th>
                        <th>A1</th> 
                        <th>A2</th> 
                        <th>A3</th> 
                        <th>A4</th> 
                        <th>A5</th> 
                        <th>A6</th> 
                        <th>Priority Weight</th>
                        
                        
                        
                    </tr>
                <tr> 
                    <td>A1</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A4</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A5</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                </tr>                                            
                                <tr>
                                    <td>A6</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                </table>

            </br>
        <p>Alternative PComparison Matrix Based A4</p>
    

        <table style="width:100%">
                <tr>
                    <th>Alternative Comparison Matrix</th>
                    <th>A1</th> 
                    <th>A2</th> 
                    <th>A3</th> 
                    <th>A4</th> 
                    <th>A5</th> 
                    <th>A6</th> 
                    <th>....</th>
                    
                </tr>
            <tr> 
                <td>A1</td>                      
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>
                <td>            </td>

                </tr>
                <tr>
                    <td>A2</td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                </tr>
                    <tr>
                        <td>A3</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                </tr>   

                    <tr>
                        <td>A4</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>    

                        <tr>
                            <td>A5</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            </tr>                                            
                            <tr>
                                <td>A6</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                
                            </tr>
            </table>

            </br>

            <p>Alternative Priority Weight Based A4</p>
        

            <table style="width:100%">
                    <tr>
                        <th>Alternative Priotrity Weigth</th>
                        <th>A1</th> 
                        <th>A2</th> 
                        <th>A3</th> 
                        <th>A4</th> 
                        <th>A5</th> 
                        <th>A6</th> 
                        <th>Priority Weight</th>
                        
                        
                        
                    </tr>
                <tr> 
                    <td>A1</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                </tr>
                    <tr>
                        <td>A2</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A4</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A5</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>                                            
                                <tr>
                                    <td>A6</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                </table>

                </br>

                <p>Alternative PComparison Matrix Based A5</p>
            

                <table style="width:100%">
                        <tr>
                            <th>Alternative Comparison Matrix</th>
                            <th>A1</th> 
                            <th>A2</th> 
                            <th>A3</th> 
                            <th>A4</th> 
                            <th>A5</th> 
                            <th>A6</th> 
                            <th>....</th>
                            
                        </tr>
                    <tr> 
                        <td>A1</td>                      
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
    
                    </tr>
                        <tr>
                            <td>A2</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>
                            <tr>
                                <td>A3</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                        </tr>   

                            <tr>
                                <td>A4</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>    

                                <tr>
                                    <td>A5</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                </tr>                                            
                                    <tr>
                                        <td>A6</td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        
                                    </tr>
                    </table>

                    </br>

            <p>Alternative Priority Weight Based A5</p>
                                                                                                

            <table style="width:100%">
                    <tr>
                        <th>Alternative Priotrity Weigth</th>
                        <th>A1</th> 
                        <th>A2</th> 
                        <th>A3</th> 
                        <th>A4</th> 
                        <th>A5</th> 
                        <th>A6</th> 
                        <th>Priority Weight</th>
                        
                        
                        
                    </tr>
                <tr> 
                    <td>A1</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                </tr>
                    <tr>
                        <td>A2</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A4</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A5</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>                                            
                                <tr>
                                    <td>A6</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                </table>

                </br>

            <p>Alternative PComparison Matrix Based A6</p>
        

            <table style="width:100%">
                    <tr>
                        <th>Alternative Comparison Matrix</th>
                        <th>A1</th> 
                        <th>A2</th> 
                        <th>A3</th> 
                        <th>A4</th> 
                        <th>A5</th> 
                        <th>A6</th> 
                        <th>....</th>
                        
                    </tr>
                <tr> 
                    <td>A1</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                </tr>
                    <tr>
                        <td>A2</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A4</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A5</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>                                            
                                <tr>
                                    <td>A6</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                </table>

        </br>

            <p>Alternative Priority Weight Based A6</p>
        

            <table style="width:100%">
                    <tr>
                        <th>Alternative Priotrity Weigth</th>
                        <th>A1</th> 
                        <th>A2</th> 
                        <th>A3</th> 
                        <th>A4</th> 
                        <th>A5</th> 
                        <th>A6</th> 
                        <th>Priority Weight</th>
                        
                        
                        
                    </tr>
                <tr> 
                    <td>A1</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                </tr>
                    <tr>
                        <td>A2</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A4</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A5</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>                                            
                                <tr>
                                    <td>A6</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                </table>

                </br>

            <p>The Final Result</p>
            <p>Eigen Criteria and Alternative</p>
            
        

            <table style="width:100%">
                    <tr>
                        <th>Alternative</th>
                        <th>c1</th> 
                        <th>c2</th> 
                        <th>c3</th> 
                        <th>c4</th> 
                        <th>c5</th> 
                        <th>c6</th> 
                        <th>Value</th>
                        <th>RANK</th>
                        
                        
                        
                    </tr>
                <tr> 
                    <td>Vektor Eigen</td>                      
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>
                    <td>            </td>

                </tr>
                    <tr>
                        <td>A1</td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                        <td>            </td>
                    </tr>
                        <tr>
                            <td>A2</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                    </tr>   

                        <tr>
                            <td>A3</td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                            <td>            </td>
                        </tr>    

                            <tr>
                                <td>A4</td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                                <td>            </td>
                            </tr>                                            
                                <tr>
                                    <td>A5</td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    <td>            </td>
                                    
                                </tr>
                                    <tr>
                                        <td>A6</td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        <td>            </td>
                                        
                                    </tr>
                </table>




                </div>
            </div>
            
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Shoreline</h4>
                        <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Misty</h4>
                                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Mountains</h4>
                                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    

@endsection
   
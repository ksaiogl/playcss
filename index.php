<?php get_header(); ?>

		<header>
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-7">
	                    <div class="header-content">
	                        <div class="header-content-inner">
	                            <h1>CSS and Keyframes Animations with efficient and responsive </h1>
	                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Download</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-sm-5">
	                    <div class="device-container">
	                        <div class="device-mockup iphone6_plus portrait white">
	                            <div class="device">
	                                <div class="screen">
	                                    
	                                    <div class="globe" id="globe"></div>
	                                    <img class="landimage" src="http://localhost/animations/wp-content/themes/animatetheme/img/mickey1.gif" class="img-responsive" alt="mickey">
	                                </div>
	                                <!--<div class="button">
	                                    
	                                </div>-->
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
	    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Documentation</p>
                    <div class="box2">
                        <h3 class="head1">Name: Globe</h3>
                        <p> Description: Globe is the name of the CSS class. In this, Globe is self rotating by using CSS Keyframes.<a href="#popup1">For more details...</a></p>
                        
                        
                                <h3>CSS Classes</h3>
                                
                                    <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">.globe{</span></td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3">background: url(../img/map2.png) 0 0 repeat;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td3">animation: spinny1 7s  linear  infinite;</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td class="td3">border-radius: 50%;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td3">background-size: 400px;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td><span class="td4">.globe</span><span class="td5">:after</span> {</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3">border-radius: 50%;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3">box-shadow: -80px 15px 80px 10px rgba(0,0,0,0.3) inset;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td><span class="td4">.globe</span><span class="td5">:before</span>{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td3">border-radius: 50%;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td class="td3">background: radial-gradient(circle at 100px 100px, #fff, #000);</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">16</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">17</td>
                                            <td ><span class="td5">@keyframes</span> spinny1 </td>
                                        </tr>
                                        <tr>
                                            <td class="td2">18</td>
                                            <td class="td6">{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">19</td>
                                            <td ><span class="td4">0% </span>{background-position: 0 0;}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">20</td>
                                            <td><span class="td4">100%</span>{background-position: 630px 0;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">21</td>
                                            <td class="td6">}</td>
                                        </tr>

                                    </table>
                                
                                <center><a href="#globe"><button class="button1">view demo</button></a></center>
                        </div>
                        <div class="box2">
                        <h3 class="head1">Name: Hover on Images</h3>
                        <p> Description:</p>
                        
                        <h3>CSS Classes</h3>
                                
                                    <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">.view{</span></td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3">position: relative;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td><span class="td4">.view .mask, .view .content </span>{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td class="td3">overflow: hidden;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td><span class="td4">.view-first .mask {</span></td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3">opacity: 0;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3">background-color: rgba(219,127,8, 0.7); </td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td3">transition: all 0.4s ease-in-out;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td ><span class="td4">.view-first <span class="td5">img</span> {</span></td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td3">transition: all 0.2s linear;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">16</td>
                                            <td><span class="td4">.view-first:<span class="td5">hover</span> .mask { </span></td>
                                        </tr>
                                        <tr>
                                            <td class="td2">17</td>
                                            <td class="td3">opacity: 1;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">18</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">19</td>
                                            <td><span class="td4">.view-first:<span class="td5">hover img</span>  {</span></td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">20</td>
                                            <td class="td3">transform: scale(1.1);</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">21</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        

                                    </table>
                            
                                <a href="#portfolioModal1"  class="portfolio-link" data-toggle="modal"><button class="button1">view demo</button></a>
                            </center>
                        </div>
                        <div class="box2">
                        <h3>Name: Spinners</h3>
                        <p> Description:</p>
                            
                        <h3>CSS Classes</h3>
                                
                            <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">.spinner </span>{</td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3">background: #eee;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td3">border-radius: 50%;</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td class="td3">position: relative;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td3">display: inline-block;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td><span class="td4">.spinner</span><span class="td5">:after</span>,<span class="td4"> .spinner</span>:<span class="td5">before</span>{</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td class="td3">display: block;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3">border-radius: 50%;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td><span class="td4">.spinner-1</span><span class="td5">:after {</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td class="td3">border: 4px solid transparent;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3">border-top-color: orangered;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td3">border-bottom-color: orangered;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td class="td3">animation: spinny 1s linear infinite;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">16</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">17</td>
                                            <td><span class="td5">@keyframes</span> spinny </td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">18</td>
                                            <td class="td6">{</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">19</td>
                                            <td class="td3"><span class="td4">0%</span> {-webkit-transform: rotate(0deg) scale(1);transform: rotate(0deg) scale(1);}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">20</td>
                                            <td class="td3"><span class="td4">50%</span> {-webkit-transform: rotate(45deg) scale(1.2);transform: rotate(45deg) scale(1.2);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">21</td>
                                            <td class="td3"><span class="td4">100%</span> {-webkit-transform: rotate(360deg) scale(1);transform: rotate(360deg) scale(1); }</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">22</td>
                                            <td class="td6">}</td>
                                        </tr>

                                    </table>
                                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal"><button class="button1">view demo</button></a>
                            </center>
                        </div>
                        <div class="box2">
                        <h3>Name: Navigation Bar</h3>
                        <p> Description:</p>
                        <h3>CSS Classes</h3>
                                
                                <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td5">nav</span> > <span class="td5">ul</span> > <span class="td5">li</span> { </td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3">position: relative;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td3">float: left;</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td class="td3">cursor: pointer;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td6" >}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td ><span class="td5">ul</span><span class="td4">.drop-menu</span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td ><span class="td5">ul</span><span class="td4">.drop-menu</span> <span class="td5">li</span> {</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3">display: none;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td><span class="td5">li</span><span class="td5">:hover</span> > <span class="td5">ul</span>.<span class="td4">drop-menu</span> <span class="td5">li </span>{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3"> display: block;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td><span class="td5">li</span>: <span class="td5">hover</span> ><span class="td5"> ul</span><span class="td4">.drop-menu.menu-1</span><span class="td5"> li </span>{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">16</td>
                                            <td class="td3">opacity:0;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">17</td>
                                            <td class="td6">} </td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">18</td>
                                            <td><span class="td5">li</span>:<span class="td5">hover</span> > <span class="td5">ul</span><span class="td4">.drop-menu.menu-1</span><span class="td5"> li:nth-child</span>(<span class="td4">n</span>){</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">19</td>
                                            <td class="td3">animation: menuone 150ms ease-in-out 150ms forwards;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">20</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">21</td>
                                            <td ><span class="td5">@keyframes </span><span class="td4"> menuone </span>{</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">22</td>
                                            <td class="td3"><span class="td5">0%</span>{opacity:0;transform:rotateY(-90deg) translateY(30px);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">23</td>
                                            <td class="td3"><span class="td5">100%</span>{opacity:1;transform:rotateY(0deg) translateY(0px);}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">24</td>
                                            <td class="td6">}</td>
                                        </tr>
                                    </table>
                                    <a href="#portfolioModal3"  class="portfolio-link" data-toggle="modal"><button class="button1">view demo</button></a>
                                </center>
                        </div>
                        <div class="box2">
                        <h3>Name: Click Events</h3>
                        <p> Description:</p>
                       <h3>CSS Classes</h3>
                                
                                <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">.section-modal </span>{</td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3">overflow: hidden;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td ><span class="td4">.section-modal .profile</span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td3"> align-items: center;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td class="td3">transition: all 200ms ease-in-out;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td ><span class="td4">.section-modal .profile</span><span class="td5">:hover</span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3">cursor: pointer;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3">transform: translateY(-4px);</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td ><span class="td4">.section-modal .overlay</span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td3">display: none;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">16</td>
                                            <td><span class="td4">.section-modal .overlay.is-active</span> {</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">17</td>
                                            <td class="td3">animation: overlayAnim 5s ease-in-out forwards; </td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">18</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">19</td>
                                            <td class="td3"><span class="td4">.section-modal .overlay.is-active .modal2 </span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">20</td>
                                            <td class="td3">animation: modalAnim 5s ease-in-out forwards;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">21</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">22</td>
                                            <td><span class="td5">@keyframes</span><span class="td4"> overlayAnim </span>{</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">23</td>
                                            <td class="td3"><span class="td5">0%</span>, <span class="td5">100%</span>{background-color: transparent;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">24</td>
                                            <td class="td3"><span class="td5">15%</span>, <span class="td5">85% {</span>background-color: rgba(0, 0, 0, 0.3);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">23</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">24</td>
                                            <td><span class="td5">@keyframes </span><span class="td4"> modalAnim </span>{</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">25</td>
                                            <td class="td3"><span class="td5">0%</span> {           transform: translateX(-200%) rotate(-90deg);opacity: 0;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">26</td>
                                            <td class="td3"><span class="td5">10%</span>transform: translateX(4%) rotate(4deg);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">27</td>
                                            <td class="td3"><span class="td5">15%</span>, <span class="td5">85% </span>{transform: translateX(0%);opacity: 1;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">28</td>
                                            <td class="td3"><span class="td5">90% </span>{transform: translateX(-4%) rotate(-4deg);}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">29</td>
                                            <td class="td3"><span class="td5">100%  </span>{transform: translateX(200%) rotate(90deg);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">30</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                    </table>
                                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal"><button class="button1">view demo</button></a>
                                </center>
                        </div>
                        <div class="box2">
                        <h3>Name: Infinite Animations</h3>
                        <p> Description:</p>
                        
                        
                       <h3>CSS Classes</h3>
                                
                                <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">#one</span>{</td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3"> position: relative;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td3">animation: myfirst1 20s infinite;</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td class="td3">animation-direction: alternate;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td ><span class="td5">@keyframes</span> <span class="td4">myfirst1</span> </td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td class="td6">{</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td class="td3"><span class="td5"> 0% </span>  {  left: -10%; top: 0%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3"><span class="td5"> 10% </span>  {  left: -5%; top: 5%;}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3"><span class="td5"> 20% </span>  {  left: 0%; top: 0%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td3"><span class="td5"> 30% </span> {  left: 5%; top: 5%;}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td class="td3"><span class="td5"> 40% </span>  {  left: 10%; top: 0%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3"><span class="td5"> 50% </span>  {  left: 15%; top: 5%;}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td3"><span class="td5"> 60% </span>  {  left: 10%; top: 0%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">15</td>
                                            <td class="td3"><span class="td5"> 70% </span>  {  left: 5%; top: 5%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">16</td>
                                            <td class="td3"><span class="td5"> 80% </span>  {  left: 0%; top: 0%;}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">17</td>
                                            <td class="td3"><span class="td5"> 90% </span>  {  left: -5%; top: 5%;}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">18</td>
                                            <td class="td3"><span class="td5"> 100%</span>  {  left: -10%; top: 0%;}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="td2">19</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                    </table>
                                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal"><button class="button1">view demo</button></a>
                                </center>
                        </div>
                        <div class="box2">
                        <h3>Name: Letter Animations</h3>
                        <p> Description:</p>
                        
                        
                        <h3>CSS Classes</h3>
                                
                                <center><table class="table1">
                                        <tr class="tr1">
                                            <td class="td1">1</td>
                                            <td><span class="td4">.words</span>{</td> 
                                        </tr>
                                        <tr>
                                            <td class="td1">2</td>
                                            <td class="td3"> position: relative;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">3</td>
                                            <td class="td3">display: inline-block;</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">4</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td2">5</td>
                                             <td><span class="td4">.words</span><span class="td5">span</span>{</td> 
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">6</td>
                                            <td class="td3">display: block;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">7</td>
                                            <td class="td3">position: absolute;</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">8</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">9</td>
                                            <td class="td3"><span class="td4"> .word1 <span class="td5">span</span>:<span class="td4">nth-child(<span class="td5">n</span>)</span> {</span>  {  left: -5%; top: 5%;}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">10</td>
                                            <td class="td3">animation: bounce11 1.7s ease-in-out infinite;</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">11</td>
                                            <td class="td6">}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="td2">12</td>
                                            <td class="td3"><span class="td5"> @keyframes </span>  <span class="td4">bounce11</span> {</td>
                                        </tr>
                                        <tr class="tr1">
                                            <td class="td1">13</td>
                                            <td class="td3"><span class="td5">0%</span>, <span class="td5">75%</span>, <span class="td5">100% </span>  transform: translateY(0px);}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">14</td>
                                            <td class="td6">}</td>
                                        </tr>
                                    </table>
                                    <a href="#portfolioModal5"  class="portfolio-link" data-toggle="modal"><button class="button1" >view demo</button></a>
                                </center>
                        </div>
                </div>
            </div>
        </div>
    </section>
     <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/hover.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hover on Images</h4>
                        <p class="text-muted">Based on CSS Hover</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/spinners.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Spinners</h4>
                        <p class="text-muted">Based on Rotations </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/hover1.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Navigation Bar</h4>
                        <p class="text-muted">Based on Transitions and Rotations</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/onclick.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Click Events</h4>
                        <p class="text-muted">On click</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/letter.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Letter Animations</h4>
                        <p class="text-muted">Baesd on Keyframes</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/animated.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Infinite Animations</h4>
                        <p class="text-muted">Based on CSS, Keyframes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


        <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <!-- Project Details Go Here -->
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #1</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="view view-first">  
        								<img class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask">  
        								    <h2>Hover Style #1</h2>  
        								    <p>Your Text</p>  
        								    <a href="#" class="info">Read More</a>  
        								</div>  
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #2</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-second">  
        								<img class=" img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #2</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #3</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-third">  
        								<img class="img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #3</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #4</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-fourth">  
        								<img  class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #4</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #5</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-fifth">  
        								<img  class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #5</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #6</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-sixth">  
        								<img  class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #6</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #7</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div> 
        							<div class="view view-seventh">  
        								<img class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #7</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #8</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-eighth">  
        								<img class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #8</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #9</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-ninth">  
        								<img class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        								<div class="mask mask-1"></div>
        								<div class="mask mask-2"></div>
        								<div class="content">
        									<h2>Hover Style #9</h2>
        									<p>Some Text</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                    <div class="box1">
                                        <h2 style="color:blue">Name:Hover Style #10</h2>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
        							<div class="view view-tenth">  
        							    <img class="img-responsive img-centered" src="http://localhost/animations/wp-content/themes/animatetheme/img/img.jpg" width="100%" height="100%" />  
        							    <div class="mask"></div>
        								<div class="content">
        									<h2>Hover Style #10</h2>
        									<p>Some description</p>
        									<a href="#" class="info">Read More</a>
        								</div>
        							</div> 
                                
                                
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>
                                </p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                
                                <div class="wrap">
                                    <h1>SPINNERS</h1>
                                    <div class="box1">
                                        <h3 style="color:blue">Name:Spinner1</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="spinner spinner-1"></div>
                                    <div class="box1">
                                        <h3 style="color:blue">Name:Spinner2</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="spinner spinner-2"></div>
                                    <div class="box1">
                                        <h3 style="color:blue">Name:Spinner3</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="spinner spinner-3"></div>
                                    <div class="box1">
                                        <h3 style="color:blue">Name:Spinner4</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="spinner spinner-4"></div>
                                    <div class="box1">
                                        <h3 style="color:blue">Name:Spinner5</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <div class="spinner spinner-5"><span></span><span></span><span></span></div>
                                </div>
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Dropdown Navigation</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <nav>
                                    <ul>
                                        <li>style 1
                                            <ul class="drop-menu menu-1">
                                                <li>uno</li>
                                                <li>dos</li>
                                                <li>tres</li>
                                                <li>cuatro</li>
                                                <li>cinco</li>
                                                <li>seis</li>
                                            </ul>
                                        </li>
                                        <li>style 2
                                            <ul class="drop-menu menu-2">
                                                <li>uno</li>
                                                <li>dos</li>
                                                <li>tres</li>
                                                <li>cuatro</li>
                                                <li>cinco</li>
                                                <li>seis</li>
                                            </ul>
                                        </li>
                                        <li>style 3
                                            <ul class="drop-menu menu-3">
                                                <li>uno</li>
                                                <li>dos</li>
                                                <li>tres</li>
                                                <li>cuatro</li>
                                                <li>cinco</li>
                                                <li>seis</li>
                                            </ul>
                                        </li>
                                        <li>style 4
                                            <ul class="drop-menu menu-4">
                                                <li>uno</li>
                                                <li>dos</li>
                                                <li>tres</li>
                                                <li>cuatro</li>
                                                <li>cinco</li>
                                                <li>seis</li>
                                            </ul>
                                        </li>
                                      </ul>
                                    </nav>
                                    <div class="box1">
                                    <h3 style="color:blue">Name:Alert Navigation</h3>
                                        <p>Type of Animation:Hover</p>
                                        <p>Description:</p>
                                    </div>
                                    <section class="section-notification">
                                        <ul class="nav">
                                            <li><i class="material-icons">home</i></li>
                                            <li><i class="material-icons">search</i></li>
                                            <li class="is-active"><i class="material-icons">star
                                                <ul class="notifications">
                                                  <li><i class="material-icons">remove_red_eye</i><span>9</span></li>
                                                  <li><i class="material-icons">comment</i><span>4</span></li>
                                                  <li><i class="material-icons">account_circle</i><span>6</span></li>
                                                </ul></i></li>
                                            <li><i class="material-icons">face</i></li>
                                        </ul>
                                    </section>
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Click on Image</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section class="section-alert">
                                    <div class="website">
                                        <div class="title-block">
                                          <div class="title"><i class="material-icons site-icon">face</i>
                                            <!--span Obviously a website--><span>Many faces of murray</span>
                                            <hr/>
                                          </div>
                                        </div>
                                        <div class="grid">
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                            <div class="item"></div>
                                        </div>
                                        <div class="alert-element">
                                            <div class="icon"><i class="material-icons">notifications</i></div>
                                            <div class="text"><span>You clicked a Murray!!</span></div>
                                        </div>
                                    </div>
                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Click on Words </h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section class="section-modal">
                                    <div class="profile"><img src="http://www.fillmurray.com/130/130"/>
                                        <div class="text">
                                          <div class="name">Bill Murray</div>
                                          <div class="meta">Click me!</div>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <div class="modal2">
                                            <div class="title">You clicked a Murray!</div>
                                            <div class="body">
                                            <div style="background-image: url(http://www.fillmurray.com/180/180)" class="img"></div>
                                            <div class="text"> 
                                              <p>Bill Murray loves you, and sends his most sincere regards.</p>
                                              <p>He also asks that you simply keep on hacking.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:click on form</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section class="modalbody12">
                                <div class="modal-wrap">
                                  <div class="modal-header"><span class="is-active"></span><span></span><span></span></div>
                                  <div class="modal-bodies">
                                    <div class="modal-body1 modal-body-step-1 is-showing">
                                      <div class="title">Step 1</div>
                                      <div class="description">Hello there, Let's play a game.</div>
                                      <form>
                                        <input type="text" placeholder="Name"/>
                                        <input type="email" placeholder="Email"/>
                                        <div class="text-center">
                                          <div class="button">Start</div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-body1 modal-body-step-2">
                                      <div class="title">Step 2</div>
                                      <div class="description">Would you rather</div>
                                      <form>
                                        <label>
                                          <input type="radio" name="radio"/>live one life that lasts 1,000 years?
                                        </label>
                                        <label>
                                          <input type="radio" name="radio" id="radio2"/>live 10 lives that last 100 years each?
                                        </label>
                                        <div class="text-center fade-in">
                                          <div class="button">Next</div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-body1 modal-body-step-3">
                                      <div class="title">Step 3</div>
                                      <div class="description">Check your email for the game results.</div>
                                      <div class="text-center">
                                        <div class="button">Done!</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <div class="rerun-button">ReRun</div>
                                </div>
                                </section>
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation1</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word1"><span>H</span><span>i</span><span>i</span><span>.</span><span>.</span><span>.</span></div>
                                <!--<section>
                                    <div class="website1">
                                      <div class="header12">
                                        <div class="logo1"> </div>
                                        <div class="text1">CSS Animation Build In</div>
                                      </div>
                                      <div class="grid1">
                                        <div class="item1">1</div>
                                        <div class="item1">2</div>
                                        <div class="item1">3</div>
                                        <div class="item1">4</div>
                                        <div class="item1">5</div>
                                        <div class="item1">6</div>
                                        <div class="item1">7</div>
                                        <div class="item1">8</div>
                                        <div class="item1">9</div>
                                        <div class="item1">10</div>
                                        <div class="item1">11</div>
                                        <div class="item1">12</div>
                                        <div class="item1">13</div>
                                        <div class="item1">14</div>
                                        <div class="item1">15</div>
                                        <div class="item1">16</div>
                                        <div class="item1">17</div>
                                        <div class="item1">18</div>
                                        <div class="item1">19</div>
                                      </div>
                                    </div>
                                </section>-->
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation2</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word2"><span>How</span> <span>Are</span> <span>You</span></div>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation3</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word3"><span>H</span> <span>i</span> <span>i</span></div>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation4</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word4">Hellooo</div>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation5</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word5">Welcome to CSS Animations.</div>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Letter Animation6</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <div class="words word6"><span>CSS</span> <span>and</span> <span>Keyframes.</span> </div>
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Moving Cloud1</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section>
                                    <div id="one">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/cloud.png" alt="cloud" width="50%" height="50%"></img>
                                    </div>

                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Bubbles on Pot</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section>
                                <div id="two">
                                    <div>
                                        <canvas id="myCanvas2" width="105" height="10"></canvas>
                                    </div> 
                                    <div>
                                        <canvas id="myCanvas1" width="105" height="90"></canvas>
                                    </div>
                                    <div >
                                        <canvas id="myCanvas" width="250" height="200" fillStyle="#e9fdf1"></canvas>
                                    </div>
                                    <div class="two">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/bubble1.jpg" alt="bubble" width="5%" height="5%"></img>
                                    </div>
                                    <div class="three">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/bubble1.jpg" alt="bubble" width="5%" height="5%"></img>
                                    </div>
                                    <div class="four">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/bubble1.jpg" alt="bubble" width="5%" height="5%"></img>
                                    </div>
                                    <div class="five">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/bubble1.jpg" alt="bubble" width="5%" height="5%"></img>
                                    </div>
                                    <div class="three1">
                                        <img src="http://localhost/animations/wp-content/themes/animatetheme/img/bubble1.jpg" alt="bubble" width="5%" height="5%"></img>
                                    </div>
                                    
                                </div>
                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Moving clouds</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section class="three12">
                                    <div id="three">
                                        
                                        <!--<img src="http://localhost/animations/wp-content/themes/animatetheme/img/cloud2.png" alt="cloud" width="50%" height="50%"></img>-->
                                        
                                    </div>
                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Zooming</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section >
                                    <div id="four">
                                        
                                        <!--<button class="roundButton"></button>-->
                                        <img  src="http://localhost/animations/wp-content/themes/animatetheme/img/butterfly.png" alt="cloud" width="50%" height="50%"></img>
                                        
                                    </div>
                                </section>
                                <div class="box1">
                                    <h3 style="color:blue">Name:Sliding</h3>
                                    <p>Type of Animation:Hover</p>
                                    <p>Description:</p>
                                </div>
                                <section>
                                    <div id="five">
                                        
                                        <img class="five12" src="http://localhost/animations/wp-content/themes/animatetheme/img/down1.png" alt="cloud" width="25%" height="25%"></img>
                                        
                                    </div>
                                </section>
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
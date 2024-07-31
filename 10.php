<?php
  $_SESSION['pg_user_id'] = 'admin001';$gap = '2mm';$gapAmount = 2;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editor</title>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.3/p5.min.js" integrity="sha512-0zGLOFv/+OQ6YfVCSGDQWhrDRx0ONmBqWvs3gI4olm8i6xtKoG1FhEnB4eTaWCVnojyfUDgE8Izeln+mAJAkFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <!-- <script type="text/javascript" src="assets/js/sketches.js?v<?php echo uniqid();?>"></script> -->
  <link rel="stylesheet" type="text/css" href="http://192.168.5.234/news/chanakyaitalic/stylesheet.css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="http://192.168.5.234/news/chanakyauni/stylesheet.css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="http://192.168.5.234/news/chanakyaunibold/stylesheet.css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="http://192.168.5.234/news/chanakyaunibolditalic/stylesheet.css" charset="utf-8" />
  <style type="text/css">
    *{
      margin: 0 !important;
    }
    body{
      font-family: 'ChanakyaUniB';
    }
    #canvasContainer{
/*      width: 1266px;*/
/*      height: 1984px;*/
      width: 324mm;
      height: 536mm;
      position: absolute;
      left: 50%;
      top:480px;  
      transform: translate(-50%,0);
      border: 1px solid black;
      z-index: -1;
/*      padding: 20px;*/
/*      display: flex;*/
/*      flex-wrap: wrap;*/
      background-color: whitesmoke;
    }
    #rowScale{
      top:480px; 

      height: 52.5cm;
      position: absolute;
      
    }
    .row-scale-label{
/*      height: 52.5cm;*/
        width: 80px;
/*        border-top: 1px solid black;*/
/*        border-style: dotted;*/
        height: 67mm;
/*        margin-left: 20px;*/
        position: relative;
        left: 150px;
        margin:0;
        font-weight: bold;
/*        border-top: 1px dotted black;*/

    }
    .editor{
/*      display: none;*/
      position: fixed;
      width: 100%;
      border: 1px solid black;
      height: 400px;
      overflow-y: scroll;
      z-index: 10;
      background-color: white;
    }
    .editor-display{
/*      display: none;*/
    }
    .border-right{
      border-right: 1px solid black;
    }
    .border-left{
      border-left: 1px solid black;
    }
    .border-top{
      border-top: 1px solid black;
    }
    .border-bottom{
      border-bottom: 1px solid black;
    }
    .news{
      
      position: absolute;
/*      padding: 2px;*/
/*      margin: 2px;*/
      /*padding-left: 5px;
      padding-right: 5px;
      padding-top:5px;*/
/*      padding-bottom:5px;*/
/*      margin: 10px;*/
      /*border-bottom: 1px solid black;
      border-right:1px solid black;*/
      border: 1px solid black;
      border-style: dotted;
      z-index: 10;
      text-align: center;
      width: 40.5mm;
      height: 67mm;
      word-break: break-word;
    }
    .news.selected{
      border-bottom: 1px solid black;
    }
    .news p{
      padding: 0;
      margin-left: 5px;
      margin-right: 5px;
      font-size: 12px;
    }
    .news h5,.news h4,.news h3,.news h2,.news h1{
      margin-left: 5px;
      margin-right: 5px;
      margin-top: 5px;

    }
    .imgDiv{
      display: flex;
      justify-content: center;
      padding-top: 5px;
      padding-left: 5px;
      padding-right: 5px;
    }   
    .news img{
      width: 100%;
      
    }
    .form-group{
      margin: 10px;
    }
    .row{
      height: 67mm;
    }
    /*
    .row-1{
      position: absolute;
      top: 0cm;
    }
    
    .row-2{
      position: absolute;
      top: 6.5625cm;
    }
    .row-3{
      position: absolute;
      top: 13.125cm;
    }
    .row-4{
      position: absolute;
      top: 19.6875cm;
    }
    .row-5{
      position: absolute;
      top: 26.25cm;
    }
    .row-6{
      position: absolute;
      top: 32.8125cm;
    }
    .row-7{
      position: absolute;
      top: 39.375cm;
    }
    .row-8{
      position: absolute;
      top: 45.9375cm;
    }
    */
    .row-8{
/*      border-bottom:3px solid red;*/
    }
    .col-1{
      position: absolute;
      left:0mm;
    }
    .col-2{
      position: absolute;
      left:40.5mm;
    }
    .col-3{
      position: absolute;
      left:81mm;
    }
    .col-4{
      position: absolute;
      left:121.5mm;
    }
    .col-5{
      position: absolute;
      left:162mm;
    }
    .col-6{
      position: absolute;
      left:202.5mm;
    }
    .col-7{
      position: absolute;
      left:243mm;
    }
    .col-8{
      position: absolute;
      left:283.5mm;
      border-righ0
      t:3px solid red;
    }
    .scale-x{
      position: fixed;
/*      margin-top: 450px;*/
      left: 50%;
      top:450px;  
      transform: translate(-50%,0);
      width: 324mm;
      background-color: black;
      color: white;
      display: block;
      z-index: 20;
      display: flex;
    }
    .scale-x *{
      margin: 0;
    }
    .scale-x .x1{

      width: 40.5mm;
      left:40.5mm;
      
    }
    .scale-x .x2{
      width: 40.5mm;
      left: 81mm;
    }
    .scale-x .x3{
      width: 40.5mm; 
      left:121.5mm;
    }
    .scale-x .x4{
      width: 40.5mm; 
      left:162mm;
    }
    .scale-x .x5{
      width: 40.5mm;
      left:202.5mm;
    }
    .scale-x .x6{
      width: 40.5mm;
      left:243mm;
    }
    .scale-x .x7{
      width: 40.5mm; 
      left:283.5mm;
    }
    .scale-x .x8{
      width: 40.5mm; 
      left:324mm;
    }
    .dynamic-layout{
      position: absolute;
    }
    .dynamic-layout>div{
      position: absolute;
    }
    .dynamic-layout p{
      font-size: 10px;
      
    }
    .dynamic-layout p div{
      padding: 2mm;
      font-size: 10px;
      width: 36.5mm;
      font-family: 'ChanakyaUniB';
      line-height: 1.5;
      text-align: justify;
/*      width: 36.5mm;*/
/*      width: ;*/
    }
    .news-col{
      text-align: justify;
      text-align-last: justify;
    }
    .dynamic-layout h1{
      text-align: justify;
      text-align-last: center;
      padding: <?php echo $gap;?>;
    }
    /*
    .dynamic-layout>div{
      padding: 1mm;
    }
    */
    .col-word-editor{
      display: flex;
      justify-content: center;
    }
    .cwe{
      width: 40.5mm;
      padding: <?php echo $gap;?>;
      height:67mm;      
    }
    @media print {
    
     body *:not(.printable) { display:none }

    
    }
  </style>
</head>
<body>
  <div class="editor">
    <div class="form-group">
      <button id="print">Print</button>
    </div>
    <div class="editor-display">
      <table>
        <tr>
          <td>  
            <div class="form-group">
              <div style="padding:10px;">
                <label>News</label>
                <select name="news_list">
                  <option value="">--SELECT--</option>
                </select>
              </div>
              <div style="padding:10px;">
                <label>Image</label>  
                <input type="checkbox" name="image_fieldset" value="image" checked>
              </div>
              <div style="padding:10px;">
                <label>Image Caption</label>  
                <input type="checkbox" name="caption_fieldset" value="imageCaption" checked>
              </div>
              <div style="padding:10px;">
                <label>Title</label>  
                <input type="checkbox" name="title_fieldset" value="body" checked>
              </div>
              <div style="padding:10px;">
                <label>Body</label>  
                <input type="checkbox" name="body_fieldset" value="body" checked>
              </div>

              <div style="padding:10px;">
                <label>How many columns need</label>  
                <select name="cols">
                  <option value="2" selected>2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div style="padding:10px;">
                <label>Border</label>
                <input type="checkbox" name="border_fieldset" value="newsBorder">
              </div>
              <div style="padding: 10px;">
                <label>X1:</label>
                <select style="width:40px;" name="x1">
                  <option>---</option>
                  <option value="0">a</option>  
                  <option value="1">b</option>  
                  <option value="2">c</option>  
                  <option value="3">d</option>  
                  <option value="4">e</option>  
                  <option value="5">f</option>  
                  <option value="6">g</option>  
                  <option value="7">h</option>  
                  <option value="8">i</option>  
                </select>
                <label>Y1:</label>
                <input type="number" style="width:40px;" name="y1">
              </div>
              <div style="padding: 10px;">
                <label>X2:</label>
                <select style="width:40px;" name="x2">
                  <option>---</option>
                  <option value="0">a</option>  
                  <option value="1">b</option>  
                  <option value="2">c</option>  
                  <option value="3">d</option>  
                  <option value="4">e</option>  
                  <option value="5">f</option>  
                  <option value="6">g</option>  
                  <option value="7">h</option>  
                  <option value="8">i</option>  
                </select>
                <label>Y2:</label>
                <input type="number" style="width:40px;" name="y2">
              </div>
              <div style="padding: 10px;">
                <button id="create_news_div">Create a new block</button>
              </div>
              <div style="padding: 10px;">
                <label>News added</label>
                <select name="news_added_list">
                  <option value="">--SELECT--</option>
                </select>
              </div>
            </div>
          </td>
          <td>
            <div style="padding:10px;" class="form-group">
              Blocks created
              <select class="blocks_created" name="block_id">
                <option value="">--SELECT--</option>
              </select>
            </div>
            <div class="form-group">
              <button class="remove_news_btn">Remove News</button>
            </div>
            <div style="padding:10px;">
              <label>Y:</label>
              <input type="number" style="width:50px;" name="newsY">
              <span>mm</span>
            </div>
            <div style="padding:10px;">
              <label>News Block Height:</label>
              <input type="number" style="width:50px;" name="newsHeight">
              <span>mm</span>
            </div>
            <div style="padding:10px;">
              <h4>Heading Color:</h4>  
              <input type="color" name="heading_color">
            </div>
            <div style="padding:10px;">
              <span>News Full Border:</span>  
              <input type="checkbox" name="news_full_border">
            </div>
          </td>
          
          <td>
            <div class="form-group">
              <button class="btn-hide-grid">Hide All Grids</button>
              <button class="btn-show-grid">Show All Grids</button>
            </div>
          </td>
        </tr>
      </table>
      <div>
        <div class="col-word-editor">
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
          <textarea class="cwe" style="display:none;"></textarea>
        </div>
      </div>
      
      
      
      
      
    </div>
  </div>
  <!-- Create a div element with an id -->
  <div class="scale-x">
    <div class="x1">a</div>
    <div class="x2">b</div>
    <div class="x3">c</div>
    <div class="x4">d</div>
    <div class="x5">e</div>
    <div class="x6">f</div>
    <div class="x7">g</div>
    <div class="x8">h</div>
    <div class="x9">i</div>
  </div>
  <div style="display: flex;">
    <div id="rowScale">
      <div class="row-scale-label">0 (0mm)</div>
      <div class="row-scale-label">1 (67mm)</div>
      <div class="row-scale-label">2 (134mm)</div>
      <div class="row-scale-label">3 (201mm)</div>
      <div class="row-scale-label">4 (268mm)</div>
      <div class="row-scale-label">5 (335mm)</div>
      <div class="row-scale-label">6 (402mm)</div>
      <div class="row-scale-label">7 (469mm)</div>
      <div class="row-scale-label">8 (536mm)</div>
    </div>
    <div id="canvasContainer" class="print-this">
      <div class="dynamic-layout">
      </div>
      <div class="row row-1">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-2">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-3">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-4">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-5">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-6">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-7">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
      <div class="row row-8">
        <div class="news blank col-1"></div>
        <div class="news blank col-2"></div>
        <div class="news blank col-3"></div>
        <div class="news blank col-4"></div>
        <div class="news blank col-5"></div>
        <div class="news blank col-6"></div>
        <div class="news blank col-7"></div>
        <div class="news blank col-8"></div>
      </div>
    </div>
  
  </div>
  
<script>
window.addEventListener("load",(function(e){document.querySelectorAll(".news.blank");let t="",n=[],l=[],o=null,c=0,i=0,s=0,r=1,a=1,d=40.5,u=null,p=null,m=null,h=null,y="2mm",f=[];$((function(){$(".editor").draggable()})),$.ajax({url:"http://localhost/editor/29-07-24-2.json",type:"get",success:function(e){if(e){n=e,n=JSON.parse(n);for(let e=0;e<n.length;e++){let t=document.createElement("option"),o=n[e].id;t.value=o,t.textContent=n[e].header+" ( "+n[e].column_select+" )";let c=n[e].column_select,i=[];if("news"==n[e].type)for(let t=0;t<c;t++){let l=n[e]["col"+(t+1)+"_val"];l=l.replace("\t",""),i.push(l)}l[o]={title:n[e].header,bodyWithCols:i,numberOfColumns:c,image:n[e].img_link,imageWidth:n[e].img_width,imageHeight:n[e].img_height,id:o},f.push(o),$('select[name="news_list"]').append(t)}console.log(f),$('select[name="news_list"]').on("change",(function(e){e.currentTarget.options.selectedIndex;c=e.currentTarget.options.selectedIndex,o=e.currentTarget}))}}});$('select[name="x1"]').on("change",(function(e){let t=$('select[name="x1"]').val();i=t})),$('select[name="x2"]').on("change",(function(e){let t=$('select[name="x2"]').val();r=t})),$('input[name="y1"]').on("input",(function(e){s=$('input[name="y1"]').val()})),$('input[name="y2"]').on("input",(function(e){a=$('input[name="y2"]').val()})),$("#create_news_div").on("click",(function(e){e.preventDefault();let t=function(e,t,n,i){let s=document.createElement("div"),r=document.createElement("h1"),a=document.createElement("p"),u=document.createElement("img"),p=(document.createElement("div"),0),m=(l[o.options[c].value].image_caption,l[o.options[c].value].bodyWithCols),h=l[o.options[c].value].numberOfColumns,f=l[o.options[c].value].title,v=l[o.options[c].value].image;v=v.replace("localhost","192.168.5.234");let b=l[o.options[c].value].imageWidth,w=l[o.options[c].value].imageHeight,g=l[o.options[c].value].id;if(f&&$('input[name="title_fieldset"]').prop("checked")&&(r.textContent=f,r.style.width=40.5*h-NaN+"mm",s.append(r),p+=r.scrollHeight),v&&$('input[name="image_fieldset"]').prop("checked")&&(u.src=v,u.style.width=b-4+"mm",u.style.height=w-4+"mm",u.style.padding=y,s.append(u)),m&&$('input[name="body_fieldset"]').prop("checked")){for(let e=0;e<h;e++){let t=document.createElement("div");t.textContent=m[e],t.classList.add("news-col"),a.style.display="flex",a.style.textAlign="justify",a.style.textJustify="inter-word",a.append(t)}s.append(a)}s.style.left=e*d+"mm",s.style.top=67*t+"mm",s.style.textAlign="center",s.style.overflowWrap="break-word",s.append(a),$(".dynamic-layout").append(s);let k=document.createElement("option");return k.value=g,k.textContent=l[g].title,document.querySelector(".blocks_created").append(k),s.setAttribute("block-id",g),s.setAttribute("news-id",g),document.querySelector('select[name="news_added_list"]').append(o.options[c]),document.querySelector('select[name="news_added_list"]').selectedIndex=0,s}(i,s);t&&($('select[name="x1"]').val(""),$('input[name="y1"]').val(""),$('select[name="x2"]').val(""),$('input[name="y2"]').val(""))})),$("input[name='heading_color']").on("input",(function(e){console.log($(this).val())})),$("select[name='block_id']").on("change",(function(e){e.preventDefault(),blockId=e.currentTarget.value;let t=$('select[name="block_id"]').val(),n=document.querySelector('div[block-id="'+t+'"]');var o;o={blockNewsId:n.attributes["news-id"].value,blockOption:e.currentTarget,blockId:e.currentTarget.value,blockOptionSelectedIndex:e.currentTarget.options.selectedIndex},u=o.blockNewsId,p=o.blockOption,h=o.blockId,m=o.blockOptionSelectedIndex;let c=document.querySelectorAll(".cwe");console.log("id-"+t);let i=function(e){for(let t=0;t<f.length;t++)if(f[t]==e)return l[f[t]]}(t);console.log(i);i.bodyWithCols,i.numberOfColumns;let s=document.querySelectorAll('div[block-id="'+t+'"] .news-col'),r=document.querySelector('div[block-id="'+t+'"]');""!=r.style.border&&r.style.border?$('input[name="news_full_border"]').prop("checked",!0):$('input[name="news_full_border"]').prop("checked",!1);for(let e=0;e<c.length;e++)c[e].value="",c[e].style.display="none";for(let e=0;e<s.length;e++)c[e].style.display="flex",c[e].value=s[e].textContent,c[e].setAttribute("data-id",e);let a=n.style.top.split("mm"),d=a[a.length-2];document.querySelector('input[name="newsY"]').value=d,a=n.style.height.split("mm");a[a.length-2];document.querySelector('input[name="newsHeight"]').value=25.4*n.scrollHeight/96})),$(".cwe").on("input",(function(e){$(this).val(e.currentTarget.value);let t=h;document.querySelectorAll('div[block-id="'+t+'"] .news-col')[e.currentTarget.attributes["data-id"].value].textContent=e.currentTarget.value})),$('input[name="newsY"]').on("input",(function(e){let t=$('select[name="block_id"]').val();document.querySelector('div[block-id="'+t+'"]').style.top=document.querySelector('input[name="newsY"]').value+"mm"})),$('input[name="newsHeight"]').on("input",(function(e){document.querySelector('div[block-id="'+h+'"]').style.height=document.querySelector('input[name="newsHeight"]').value+"mm"})),$(".remove_news_btn").on("click",(function(e){if(!u)return void alert("Sorry! News Not Selected ! Failed To Remove!");let t=document.createElement("option");t.value=u,t.textContent=l[u].title+" ( "+l[u].numberOfColumns+" )",document.querySelector("select[name='news_list']").append(t),document.querySelector('div[block-id="'+h+'"]').remove(),$(".cwe").css({display:"none"}),p.options[m].remove(),u=null,u=null,p=null,h=null,m=null})),$('input[name="news_full_border"]').on("input",(function(e){let t=$('select[name="block_id"]').val(),n=document.querySelector('div[block-id="'+t+'"]');if(!t)return alert("Select news"),void $(this).prop("checked",!1);let l=n.querySelectorAll(".news-col").length;if($(this).prop("checked")){n.style.border="0.5px solid black",n.style.margin=y;let e=n.querySelector("img"),t=e.style.width.split("mm")[0];e.style.width=parseFloat(t)-4+"mm",n.style.width=d*l-2+"mm";let o=n.style.top.split("mm")[0];console.log(o),n.style.top=parseFloat(o)+2+"mm";let c=n.style.left.split("mm")[0];n.style.left=parseFloat(c)+2+"mm"}else{n.style.border=null,n.style.margin=null;let e=n.querySelector("img"),t=e.style.width.split("mm")[0];e.style.width=parseFloat(t)+4+"mm",n.style.width=d*l+"mm";let o=n.style.top.split("mm")[0];n.style.top=parseFloat(o)-2+"mm";let c=n.style.left.split("mm")[0];n.style.left=parseFloat(c)-2+"mm"}}));$(".width").on("input",(function(e){document.querySelector(".news.selected").style.width=$('input[name="width"]').val()+"px"})),$(".x").on("input",(function(e){document.querySelector(".news.selected").style.left=$(".x").val()+"px"})),$(".y").on("input",(function(e){document.querySelector(".news.selected").style.top=$(".y").val()+"px"})),$(".height").on("input",(function(e){document.querySelector(".news.selected").style.height=$('input[name="height"]').val()+"px"})),$(".paragraph-font-size").on("input",(function(e){$(".news.selected p").css({fontSize:$(".paragraph-font-size").val()+"px"})})),$(".btn-hide").on("click",(function(e){e.preventDefault(),$(".news.selected").hide(),$(".news.selected").addClass("hidden")})),$(".btn-show-hidden-block").on("click",(function(e){e.preventDefault(),$(".news").hide(),$(".news.hidden").show()})),$(".btn-show-block").on("click",(function(e){e.preventDefault(),$(".news").show(),$(".news.hidden").hide()})),$(".btn-unhide").on("click",(function(e){e.preventDefault(),$(".news").show(),$(".news.selected").removeClass("hidden")})),$(".btn-text").on("click",(function(e){e.preventDefault(),""!=t&&(t+='<p class="myparagraph">'+$(".text").val()+"</p>",$(".news.selected").html(t))})),$(".btn-heading").on("click",(function(e){e.preventDefault(),t+="<"+$('select[name="heading_type"]').val()+' class="myheading">'+$(".heading").val()+"</"+$('select[name="heading_type"]').val()+">",$(".news.selected").html(t)})),$(".btn-add-img").on("click",(function(e){e.preventDefault(),t+="<div class='imgDiv'><img class='main-image' src='"+$("input[name='image']").val()+"'></div>",$(".news.selected").html(t)})),$(".btn-left-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({borderLeft:"1px solid black"})})),$(".btn-right-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({borderRight:"1px solid black"})})),$(".btn-top-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({borderTop:"1px solid black"})})),$(".btn-bottom-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({borderBottom:"1px solid black"})})),$(".btn-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({border:"1px solid black"})})),$(".btn-remove-border").on("click",(function(e){e.preventDefault(),$(".news.selected").css({border:"none"})})),$(".btn-hide-grid").on("click",(function(e){e.preventDefault(),$(".news.blank").css({border:"none"})})),$(".btn-show-grid").on("click",(function(e){e.preventDefault(),$(".news").css({border:"1px solid black",borderStyle:"dotted"})})),$(".btn-empty-block").on("click",(function(e){e.preventDefault(),$(".news.selected").html(""),t=""})),$("#print").click((function(e){$(".print-this").addClass("printable"),$(".print-this *").addClass("printable"),document.querySelector("#canvasContainer").style.top="0",document.querySelector("#canvasContainer").style.border="none",window.print()})),onafterprint=function(){document.querySelector("#canvasContainer").style.top="480px"}}));
</script>
</body>
</html>
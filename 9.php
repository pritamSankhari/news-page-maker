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
  window.addEventListener('load',function(e1){

    let allNews = document.querySelectorAll('.news.blank');
    let html = "";
    let x_co_ordinate = {a:0,b:1,c:2,d:3,e:4,f:5,g:6,h:7,i:8,j:9,k:10,l:11,m:12,n:13,o:14,p:15}
    let y = 0;
    let newsListFromUrl = [];
    let newsList = [];
    let selectedNewsOption = null;
    let selectedNewsOptionIndex = 0;
    let x1 = 0;
    let y1 = 0;
    let x2 = 1;
    let y2 = 1;
    let x1_to_x2 = 40.5;
    let y1_to_y2 = 67;
    let newsBlockList = [];
    let newsBlockId = 1;

    let selectedBlockNewsId = null;
    let selectedBlockOption = null;
    let selectedBlockOptionIndex = null;
    let selectedBlockId = null;

    let newsIds = [];

    let pxToMm = function(px){

      var dpi = 96; // Typical screen DPI
      var mmPerInch = 25.4;
      var divHeightMm = px * mmPerInch / dpi;
      return divHeightMm;
    }

    $( function() {
      $( ".editor" ).draggable();
    });

    // FETCHING NEWS
    // ----------------------------
    $.ajax({

      // url:'http://192.168.5.234/news/Edit_controller/get_page_news/kol/pg1/admin001/25-07-24',
      url:'http://192.168.5.234/news/Edit_controller/get_page_news/kol/pg1/admin001/29-07-24',
      type:'get',
      success: function(result){

        if(result){
          // console.log(result);
          newsListFromUrl = result;
          console.log(newsListFromUrl);
          
          
          for(let i=0;i<newsListFromUrl.length;i++){
            let option = document.createElement('option');
            let id = newsListFromUrl[i]['id']
            option.value = id;
            option.textContent = newsListFromUrl[i]['header']+' ( '+newsListFromUrl[i]['column_select']+' )';
            
            let coln = newsListFromUrl[i]['column_select'];
            // console.log(coln);
            let colBody = [];
            for(let k=0;k<coln;k++){
              let b = newsListFromUrl[i]['col'+(k+1)+'_val'];
              // console.log(b);
              b=b.replace('\t','');

              colBody.push(b);
            }
            
            newsList[id] = {
              // image_caption:newsListFromUrl[i]['image_caption'],
              title:newsListFromUrl[i]['header'],
              bodyWithCols:colBody,
              numberOfColumns:coln,
              image:newsListFromUrl[i]['img_link'],
              imageWidth:newsListFromUrl[i]['img_width'],
              // tag:newsListFromUrl[i]['tag'],
              id:id,
            };
            newsIds.push(id);

            $('select[name="news_list"]').append(option);  
          }
          console.log(newsIds);
          $('select[name="news_list"]').on('change',function(e){


            // console.log(e.currentTarget.value);
            // console.log(e.currentTarget.options);
            let optionIndex = e.currentTarget.options.selectedIndex;

            // option selected index
            selectedNewsOptionIndex = e.currentTarget.options.selectedIndex;

            // select element
            selectedNewsOption = e.currentTarget;
            // $('select[name="news_added_list"]').append(e.currentTarget.options[optionIndex]);

            // REMOVE OPTION
            // e.currentTarget.options[optionIndex].remove();
            // !REMOVE OPTION


            // let element = $('select[name="news_list"]').options.selectedIndex;
            // console.log(element);
          })
          
        }
      }
    });
    let createNewsBlock = function(x1,y1,x2,y2){
      let div = document.createElement('div');
      let heading = document.createElement('h1');
      let body = document.createElement('p');
      let img = document.createElement('img');
      let imageCaptionElement = document.createElement('div');

      let newsHeight = 0;
      
      let newsImageCaption = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].image_caption;
      let newsBody = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].bodyWithCols;
      let nCols = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].numberOfColumns;
      let newsTitle = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].title;
      let newsImage = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].image;
      newsImage = newsImage.replace('localhost','192.168.5.234');
      let newsImageWidth = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].imageWidth;
      let newsId = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].id;
      // let newsTag = newsList[selectedNewsOption.options[selectedNewsOptionIndex].value].tag;
      let newsTag = newsTitle;

      // console.log(newsBody);



      // ---------------------------
      if(newsTitle && $('input[name="title_fieldset"]').prop('checked')){
        heading.textContent = newsTitle;
        div.append(heading);
        newsHeight+=heading.scrollHeight;
      }
      if(newsImage && $('input[name="image_fieldset"]').prop('checked')){
        img.src = newsImage;
        img.style.width = newsImageWidth-<?php echo $gapAmount*2;?>+'mm';
        img.style.padding = '<?php echo $gap;?>';
        div.append(img);
      }
      if(newsBody){
        for(let i=0;i<nCols;i++){
          let colElement = document.createElement('div');
          colElement.textContent = newsBody[i];
          colElement.classList.add('news-col');
          body.style.display = 'flex';
          body.style.textAlign = 'justify';
          body.style.textJustify = 'inter-word';  
          body.append(colElement); 
          
        }
      }
      
      // console.log(body);
      // div.append(body);
      div.style.left = (x1*x1_to_x2)+'mm';
      div.style.top = (y1*y1_to_y2)+'mm';
      // div.style.width = ((x2-x1)*x1_to_x2)-4 + 'mm';
      // div.style.height = ((y2-y1)*y1_to_y2)-4 + 'mm';
      
      div.style.textAlign = 'center';
      // div.style.padding = '2mm';
      
      div.style.overflowWrap = 'break-word';
      // div.setAttribute('block-id',newsBlockId);
      // div.setAttribute('news-id',newsId);
      div.append(body);
      $('.dynamic-layout').append(div);

      // add to page-set news option list 
      let blockCreatedOption = document.createElement('option');
      blockCreatedOption.value = newsId;
      // blockCreatedOption.value = newsBlockId;
      blockCreatedOption.textContent = newsList[newsId].title;
      document.querySelector(".blocks_created").append(blockCreatedOption);
      // div.setAttribute('block-id',newsBlockId);
      div.setAttribute('block-id',newsId);
      div.setAttribute('news-id',newsId);

      newsBlockId++;

      document.querySelector('select[name="news_added_list"]').append(selectedNewsOption.options[selectedNewsOptionIndex]);
      document.querySelector('select[name="news_added_list"]').selectedIndex = 0;

      return div;
      // END
      // ---------------------------

      if(newsTitle && $('input[name="title_fieldset"]').prop('checked')){
        heading.textContent = newsTitle;
        div.append(heading);
        newsHeight+=heading.scrollHeight;
      } 

      
      if(newsImage && $('input[name="image_fieldset"]').prop('checked')){
        img.src = newsImage;
        img.style.width = '100%';
        div.append(img);
      }
      if(newsImageCaption && $('input[name="image_fieldset"]').prop('checked')){

        imageCaptionElement.style.fontSize = '12px';
        imageCaptionElement.style.textAlign = 'left';
        imageCaptionElement.style.fontStyle = 'italic'; 
        imageCaptionElement.textContent = newsImageCaption;
        div.append(imageCaptionElement);
      }
      // Divide into colums
      /*
      if((x2-x1) > 1 && newsBody){

        let cols = x2-x1;
        let sCols = $('select[name="cols"]').val();
        if(sCols <= cols){
          cols = sCols;
        }
         
        newsBody = newsBody.replace(/\n/g,' ');
        newsBody = newsBody.replace(/\t/g,' ');
        newsBody = newsBody.replace('  ',' ');
        newsBody = newsBody.trim();
        console.log(newsBody);
        let words = newsBody.split(' ');

        let eachColWords = (words.length)/cols;
        eachColWords = Math.ceil(eachColWords);
        let eachColString = '';
        console.log('total: '+words.length);
        console.log('each: '+eachColWords);
        
        let j=0;
        let string = '';

        
        body.style.display = 'flex';
        body.style.textAlign = 'justify';
        // body.style.textAlignLast = 'center';
        // body.style.textAlignLast = 'justify';
        body.style.textJustify = 'inter-word';  

        // body.style.textJustify = 'auto';  

        for(let i=0;i<cols;i++){
          eachColString = '';
          
          let colElement = document.createElement('div');  

          for(j=i*eachColWords;j<(i+1)*eachColWords;j++){

            if(words[j]) eachColString += words[j]+' ';
            
          }
          console.log(i*eachColWords);
          string += eachColString;

          colElement.textContent = eachColString;
          // COL WIDTH
          // colElement.style.width = '38mm';
          // colElement.style.padding = '4px';
          // colElement.style.textAlignLast = 'justify';
          body.append(colElement);  
          
          // console.log(eachColString);
         
        }

        if(string.length > newsBody.length){
          console.log(string);
          console.log('String Length:'+string.length);
          console.log('News Body Length:'+newsBody.length);
          alert('News not fit!');
          return null;
        }
        div.append(body);
        
      }
      else if(newsBody != ''){
        body.textContent = newsBody;
        body.style.textAlign = 'justify';
        body.style.textJustify = 'inter-word';  
        div.append(body);
      }

      div.style.left = (x1*x1_to_x2)+'mm';
      div.style.top = (y1*y1_to_y2)+'mm';
      div.style.width = ((x2-x1)*x1_to_x2)-4 + 'mm';
      div.style.height = ((y2-y1)*y1_to_y2)-4 + 'mm';
      
      div.style.textAlign = 'center';
      div.style.padding = '2mm';
      
      div.style.overflowWrap = 'break-word';
      div.setAttribute('block-id',newsBlockId);
      div.setAttribute('news-id',newsId);

      if($('input[name="border_fieldset"]').prop('checked')){
        div.style.border = '1px solid black';
      }

      $('.dynamic-layout').append(div);

      // CHECKING NEWS HEIGHT
      // ----------------------------------
      if(newsTitle){
        newsHeight += heading.scrollHeight;  
      }
      if(newsImage && $('input[name="image_fieldset"]').prop('checked')){
        newsHeight += img.scrollHeight;
      }
      if(newsImageCaption && $('input[name="image_fieldset"]').prop('checked')){

        newsHeight += imageCaptionElement.scrollHeight;
      }
      if(newsBody){
        newsHeight += body.scrollHeight;
      }
      var heightPx = div.scrollHeight;
      // Convert pixels to millimeters
      var heightMm = pxToMm(newsHeight);
      console.log(heightMm);
      console.log(((y2-y1)*y1_to_y2)-4);
      if(heightMm > ((y2-y1)*y1_to_y2)-4){
        alert('News not fitting!');
        div.remove();
        return null;
      }
      // ----------------------------------
      // let blockCreatedOption = document.createElement('option');
      blockCreatedOption.value = newsBlockId;
      blockCreatedOption.textContent = newsList[newsId].title;
      document.querySelector(".blocks_created").append(blockCreatedOption);

      newsBlockId++;

      document.querySelector('select[name="news_added_list"]').append(selectedNewsOption.options[selectedNewsOptionIndex]);
      document.querySelector('select[name="news_added_list"]').selectedIndex = 0;
      // document.querySelector('select[name="news_added_list"]').append(selectedNewsOption);

      // optional
      // selectedNewsOption.options[selectedNewsOptionIndex].remove();
      
      return div;
      */
    }
    let initSelectedNews = function(selected){
      selectedBlockNewsId = selected.blockNewsId;
      selectedBlockOption = selected.blockOption;
      selectedBlockId = selected.blockId;
      selectedBlockOptionIndex = selected.blockOptionSelectedIndex;
    }
    let resetSelectedNews = function(){
      selectedBlockNewsId = null;
      selectedBlockOption = null;
      selectedBlockId = null;
      selectedBlockOptionIndex = null;
    }
    let getNewsById = function(id){
      // console.log(newsList);
      for(let i=0;i<newsIds.length;i++){
        if(newsIds[i] == id){
          return newsList[newsIds[i]];
        }
      }
    }
    // !FETCHING NEWS
    $('select[name="x1"]').on('change',function(e){
      let c = $('select[name="x1"]').val();
      x1 = c;
    });
    $('select[name="x2"]').on('change',function(e){
      let c = $('select[name="x2"]').val();
      x2 = c;
    });
    
    $('input[name="y1"]').on('input',function(e){
      y1=$('input[name="y1"]').val();
    });
    $('input[name="y2"]').on('input',function(e){
      y2=$('input[name="y2"]').val();
    });

    $('#create_news_div').on('click',function(e){

      e.preventDefault();
      // let div = document.createElement('div');
      // div.textContent = "Hello";
      let div = createNewsBlock(x1,y1,x2,y2);

      if(!div) return;

      // console.log('height '+pxToMm(px));

      $('select[name="x1"]').val('');
      $('input[name="y1"]').val('');
      $('select[name="x2"]').val('');
      $('input[name="y2"]').val('');
    });
    $("input[name='heading_color']").on('input',function(e){
      // ++++++++++++++++++++++++++++
      console.log($(this).val());

    });
    $("select[name='block_id']").on('change',function(e){
      e.preventDefault();
      blockId = e.currentTarget.value;
      let n = $('select[name="block_id"]').val();
      let block = document.querySelector('div[block-id="'+n+'"]');
      
      initSelectedNews({
       
        blockNewsId:block.attributes['news-id'].value,
        blockOption:e.currentTarget,
        blockId:e.currentTarget.value,
        blockOptionSelectedIndex:e.currentTarget.options.selectedIndex

      });
      // alert(pxToMm(block.scrollHeight));
      // selectedBlockNewsId = block.attributes['news-id'].value;
      // selectedBlockOption = e.currentTarget;
      // selectedBlockId = e.currentTarget.value;
      // selectedBlockOptionIndex = e.currentTarget.options.selectedIndex;
      
      // alert(selectedBlockOptionIndex);
      // console.log()
      // console.log(block);
      
      // Display Cols input textarea
      let textareas = document.querySelectorAll('.cwe');
      // console.log(selectedBlockNewsId);
      
      console.log('id-'+n);
      
      
      let news = getNewsById(n);
      console.log(news);
      let newsBody = news.bodyWithCols;
      let nCols = news.numberOfColumns;

      let colsData = document.querySelectorAll('div[block-id="'+n+'"] .news-col');
      let newsDiv = document.querySelector('div[block-id="'+n+'"]');

      // Set border input
      if(newsDiv.style.border == '' || !newsDiv.style.border){
        $('input[name="news_full_border"]').prop('checked',false);
      }
      else{
        $('input[name="news_full_border"]').prop('checked',true);
      }
      // console.log(cols);
      // reset Cols input textarea
      for(let i=0;i<textareas.length;i++){
        textareas[i].value = '';
        textareas[i].style.display = 'none';
      }
      for(let i=0;i<colsData.length;i++){
        textareas[i].style.display = 'flex';
        textareas[i].value = colsData[i].textContent;
        textareas[i].setAttribute('data-id',i);
      }

      // Load Y-position
      let s = block.style.top.split("mm");
      let y = s[s.length-2];
      document.querySelector('input[name="newsY"]').value = y;

      // Load Height
      s = block.style.height.split("mm");
      let h = s[s.length-2];
      document.querySelector('input[name="newsHeight"]').value = pxToMm(block.scrollHeight);
    });


    $('.cwe').on('input',function(e){
      $(this).val(e.currentTarget.value);
      let blockId = selectedBlockId;
      let cols = document.querySelectorAll('div[block-id="'+blockId+'"] .news-col');
      let colIndex = e.currentTarget.attributes['data-id'].value;

      cols[colIndex].textContent = e.currentTarget.value;
      // console.log(cols[colIndex]);
      // console.log(cols);
      // console.log(e.currentTarget.attributes['data-id'].value);

    });
    $('input[name="newsY"]').on('input',function(e){

      let n = $('select[name="block_id"]').val();
      // let block = document.querySelector('div[block-id="'+n+'"]');

      // let t = block.style.top;
      // let top = t.split('mm')[0];

      document.querySelector('div[block-id="'+n+'"]').style.top = document.querySelector('input[name="newsY"]').value + 'mm';
    });
    $('input[name="newsHeight"]').on('input',function(e){
      document.querySelector('div[block-id="'+selectedBlockId+'"]').style.height = document.querySelector('input[name="newsHeight"]').value + 'mm';
    });
    $(".remove_news_btn").on('click',function(e){
      if(!selectedBlockNewsId){
        alert('Sorry! News Not Selected ! Failed To Remove!');
        return;
      }
      let option = document.createElement('option');
      option.value = selectedBlockNewsId;
      option.textContent = newsList[selectedBlockNewsId].title +' ( '+newsList[selectedBlockNewsId].numberOfColumns+' )';
      document.querySelector("select[name='news_list']").append(option);
      document.querySelector('div[block-id="'+selectedBlockId+'"]').remove();
      $('.cwe').css({
        display:'none'
      })
      // console.log(selectedBlockOption.options[selectedBlockOptionIndex]);
      selectedBlockOption.options[selectedBlockOptionIndex].remove();
      selectedBlockNewsId = null;
      resetSelectedNews();

    });

    $('input[name="news_full_border"]').on('input',function(e){
      let n = $('select[name="block_id"]').val();
      let block = document.querySelector('div[block-id="'+n+'"]');
      if(!n){
        alert('Select news');
        $(this).prop('checked',false);
        return;
      }
      let ncols = block.querySelectorAll('.news-col').length;

      console.log($(this).prop('checked'));
      if($(this).prop('checked')){
        block.style.border = '0.5px solid black';
        block.style.margin = '<?php echo $gap;?>';

        let img = block.querySelector('img');
        let imageWidth = img.style.width.split('mm')[0];
        img.style.width = (parseFloat(imageWidth) - <?php echo $gapAmount*2;?>) +'mm';
        
        block.style.width = (x1_to_x2*ncols)-<?php echo $gapAmount*2;?>+'mm';
        // block.style.height = (y1_to_y2*ncols)-4+'mm';
        
        let t = block.style.top;
        let top = t.split('mm')[0];
        console.log(top);
        block.style.top = (parseFloat(top)+<?php echo $gapAmount;?>)+'mm';

        let l = block.style.left;
        let left = l.split('mm')[0];
        block.style.left = (parseFloat(left)+<?php echo $gapAmount;?>)+'mm';
        // block.style.margin = '2px';
      }
      else{
        block.style.border = null;
        block.style.margin = null;

        let img = block.querySelector('img');
        let imageWidth = img.style.width.split('mm')[0];
        img.style.width = (parseFloat(imageWidth) + <?php echo $gapAmount*2;?>) +'mm';
        
        block.style.width = (x1_to_x2*ncols)+'mm';
        // block.style.height = (y1_to_y2*ncols)+'mm';
        
        let t = block.style.top;
        let top = t.split('mm')[0];
        block.style.top = (parseFloat(top)-<?php echo $gapAmount;?>)+'mm';

        let l = block.style.left;
        let left = l.split('mm')[0];
        block.style.left = (parseFloat(left)-<?php echo $gapAmount;?>)+'mm';
        
      }
    });

    let resetNewsGrids = function(){
      
      // EXPERIMENT
      // console.dir(allNews[i]);
      allNews = document.querySelectorAll('.news');
      
      for(let i=0;i<allNews.length;i++){
        // allNews[i].style.border = "1px solid black";
        if(allNews[i].innerHTML == ""){
          allNews[i].style.backgroundColor = "white";
          // allNews[i].style.border = "none";
        } 
        else{
          allNews[i].style.backgroundColor = "white";
        }
        // allNews[i].style.borderStyle = "dotted";
        allNews[i].classList.remove("selected");
      }
      
      // $(".news.blank").css({
      //  border:"1px solid black",
      //  borderStyle:"dotted"
      // });
      
      
      // allNews[i].classList.add('my-news');
    }

    let selectNewsGrid = function(e){
      // $(".news.blank").css({
      //  border:"none",
      //  // borderStyle:"dotted"
      // });
      e.currentTarget.classList.add("selected");
      e.currentTarget.style.backgroundColor = 'lightgrey'
      // e.currentTarget.style.border = "1px solid black";
      // e.currentTarget.style.borderStyle = "dotted";
      // e.currentTarget.classList.remove("blank");
    }

    /*
    // SELECT NEWS BLOCK 
    for(let i=0;i<allNews.length;i++){

      allNews[i].addEventListener('click',function(e){

        for(let i=0;i<allNews.length;i++){
          resetNewsGrids();
        }
        // console.dir(e.currentTarget);
        selectNewsGrid(e);
        
        $('.width').val(e.currentTarget.clientWidth)
        $('.height').val(e.currentTarget.clientHeight)
        
        document.querySelector('.editor-display').style.display="block";
        console.log(e);
        let width = e.currentTarget.clientWidth;
        let height = e.currentTarget.clientHeight;
        
        $('input[name="width"]').val(width);
        $('input[name="height"]').val(height);

        let l = e.currentTarget.style.left.split("px");
        let t = e.currentTarget.style.top.split("px");

        $('.x').val(l[0]);
        $('.y').val(t[0]);
        $(".heading").val($(".news.selected .myheading").text());
        $(".text").val($(".news.selected .myparagraph").text());
        $("input[name='image']").val($(".news.selected .main-image").attr('src'));
        html="";
        // e.currentTarget.classList.remove('blank');
        // $('.news.selected').on('click',function(e2){


        // })
      });
    }
    */
    $('.width').on('input',function(e){
      
      document.querySelector('.news.selected').style.width = $('input[name="width"]').val()+'px'
        
    });
    $('.x').on('input',function(e){
      
      document.querySelector('.news.selected').style.left = $('.x').val()+'px'
        
    });
    $('.y').on('input',function(e){
      
      document.querySelector('.news.selected').style.top = $('.y').val()+'px'
        
    });
    $('.height').on('input',function(e){

      document.querySelector('.news.selected').style.height = $('input[name="height"]').val()+'px'
    });
    $('.paragraph-font-size').on('input',function(e){
      $('.news.selected p').css({
        fontSize:$('.paragraph-font-size').val()+'px' 
      })
      
    });

    $(".btn-hide").on('click',function(e){
      
      e.preventDefault();
      $('.news.selected').hide();
      $('.news.selected').addClass('hidden');
    });
    $(".btn-show-hidden-block").on("click",function(e){

      e.preventDefault();
      $(".news").hide();
      $(".news.hidden").show();
    });
    $(".btn-show-block").on("click",function(e){

      e.preventDefault();
      $(".news").show();
      $(".news.hidden").hide();
      
    });
    $(".btn-unhide").on('click',function(e){
      e.preventDefault();
      $('.news').show();
      $('.news.selected').removeClass('hidden');
    });

    $(".btn-text").on('click',function(e){
      e.preventDefault();
      if(html == "") return;
      // if(!$('.news.selected myheading').val()) return;
      html+='<p class="myparagraph">'+$('.text').val()+'</p>';
      $('.news.selected').html(html);
    });
    $(".btn-heading").on('click',function(e){
      e.preventDefault();
      html+='<'+$('select[name="heading_type"]').val()+' class="myheading">'+$('.heading').val()+'</'+$('select[name="heading_type"]').val()+'>';
      $('.news.selected').html(html);
    });
    $(".btn-add-img").on("click",function(e){

      e.preventDefault();
      html+="<div class='imgDiv'><img class='main-image' src='"+$("input[name='image']").val()+"'></div>";
      $('.news.selected').html(html);
    });
    // ADD BORDER
    // -----------------------------------------
    $('.btn-left-border').on("click",function(e){
      
      e.preventDefault();
      // $(".news.selected").css({
      //  border:"none"
      // });
      // $(".news.selected").addClass('border-left')
      
      $(".news.selected").css({
        borderLeft:"1px solid black"
      });
      
    });
    $('.btn-right-border').on("click",function(e){
      
      e.preventDefault();
      // $(".news.selected").css({
      //  border:"none"
      // });
      // $(".news.selected").addClass('border-right');
      $(".news.selected").css({
        borderRight:"1px solid black"
      });
      
    });
    $('.btn-top-border').on("click",function(e){
      
      e.preventDefault();
      // $(".news.selected").css({
      //  border:"none"
      // });  

      // $(".news.selected").addClass('border-top');
      $(".news.selected").css({
        borderTop:"1px solid black"
      });
      
    });
    $('.btn-bottom-border').on("click",function(e){
      
      e.preventDefault();
      // $(".news.selected").css({
      //  border:"none"
      // });
      // $(".news.selected").addClass('border-bottom');
      $(".news.selected").css({
        borderBottom:"1px solid black"
      });
      
    });
    $('.btn-border').on("click",function(e){
      
      e.preventDefault();
      
      // e.currentTarget.style.border = "1px solid black";
      // let grid = document.querySelector(".news.selected");
      // console.dir(grid)
      // grid.currentTarget.style.border = "1px solid black";
      $(".news.selected").css({
        border:"1px solid black"
      });
      // $(".news.selected").addClass('border-bottom');
      // $(".news.selected").css({
      //  border:"1px solid black"
      // });

      
    });
    $('.btn-remove-border').on("click",function(e){
      
      e.preventDefault();
      
      // e.currentTarget.style.border = "1px solid black";
      // let grid = document.querySelector(".news.selected");
      // console.dir(grid)
      // grid.currentTarget.style.border = "1px solid black";
      $(".news.selected").css({
        border:"none"
      });
      // $(".news.selected").addClass('border-bottom');
      // $(".news.selected").css({
      //  border:"1px solid black"
      // });

      
    });
    // -----------------------------------------



    $(".btn-hide-grid").on("click",function(e){
      e.preventDefault();
      $(".news.blank").css({
        border:"none"
      });
    });
    $(".btn-show-grid").on("click",function(e){
      e.preventDefault();
      $(".news").css({
        border:"1px solid black",
        borderStyle:"dotted"
      });
    });
    $(".btn-empty-block").on("click",function(e){
      e.preventDefault();
      $(".news.selected").html("");
      html="";
    });

    $("#print").click(function(event){
        $(".print-this").addClass("printable");
        $(".print-this *").addClass("printable");
        document.querySelector('#canvasContainer').style.top = '0';
        document.querySelector('#canvasContainer').style.border = 'none';
        window.print();
        
    });

    onafterprint = function (){
      document.querySelector('#canvasContainer').style.top = '480px';
    } 

  });
</script>
</body>
</html>
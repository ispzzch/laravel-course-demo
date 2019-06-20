@extends('layouts.blog')

@section('content')
<!-- Page Header -->
<header class="masthead"
  style="background-image: url('http://realman.tw/media/6ed7cbc4-ceb0-4a03-94a7-cc3b08775c63.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>關於架站</h1>
          <span class="subheading">練習使用 Laravel，就像揮出你的右拳 </span>
          <span class="subheading">揮個一千次你就會了</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p><img src="https://www.happycoder.org/images/python101/coding101.jpeg" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <h1 id="前言"><a href="#前言" class="headerlink" title="前言"></a>前言</h1>
      <blockquote>
        <p>「軟體正在吃掉全世界。」（Software is eating the world.）</p>
      </blockquote>
      <p>這是知名創投也是 Netscape 瀏覽器共同創辦人 Marc Andreessen 的名言。</p>
      <p>隨著科技的快速發展，我們生活中已經離不開網路、手機等科技電子產品，而這些科技電子產品，背後往往有電腦軟體程式在運作（想想你每天使用的 Google、Facebook、LINE、Youtube
        等應用程式）。也因為全世界的學校陸續開始將程式設計課程列入課綱之中，從一般白領上班族到有小孩的家長，不論是否是資訊相關科系畢業都開始學習程式語言和程式設計相關知識。深怕沒有擁有這項程式語言第二專長會被小孩所嫌棄或是錯過加薪升職的大好機會。
      </p>
      <p>然而隨著網路、軟體技術的日新月異，初學者往往會迷失在豐富的學習資源和除錯 debug
        的挫折當中，喪失了程式設計本身創作的樂趣。所以這邊我們要分享自學程式設計必備觀念和心態，希望讓所有有自學程式設計需求的朋友，不再徬徨、無助。</p>
      <h1 id="為什麼要學習程式設計？"><a href="#為什麼要學習程式設計？" class="headerlink" title="為什麼要學習程式設計？"></a>為什麼要學習程式設計？</h1>
      <p>我們為什麼要學習程式設計？相信這是許多家長和初學者內心的疑問。</p>
      <p>事實上，程式設計是一種介於藝術與科學的腦力創作運動。學習程式設計正確心態是透過學習程式設計理解電腦科學運作的原理和動手用科技技術解決生活上的問題。</p>
      <p>
        在學習程式設計過程中可以培養<code>創造能力</code>（對，你只要有一台電腦和網路就有機會創造出幾千幾萬人使用的軟體或網路服務），<code>邏輯思考</code>、<code>團隊合作</code>、<code>自學能力</code>和<code>解決問題的能力</code>。
      </p>
      <p>
        撰寫程式可以讓你可以學習怎麼樣把一個複雜的問題切分成一個個小問題，在這個過程中不但可以訓練邏輯思考、解決問題的能力。隨著專案越來越大、技術越來越複雜，你可能會需要和其他專案成員合作去解決和學習你不懂的新技術，是一個很好培養自學能力和團隊合作能力的機會。當然在過程中可能會因為長期關注電腦螢幕而需要適時的休息和運動（但現代人即便不寫程式也是每天盯著螢幕了：P），這也是為什麼幼稚園和國中小的學童們會建議先從<code>不插電學習程式設計</code>的教材和桌遊開始學習程式設計和電腦科學的邏輯觀念。
      </p>
      <h1 id="確認目標和動機"><a href="#確認目標和動機" class="headerlink" title="確認目標和動機"></a>確認目標和動機</h1>
      <p>最好學習程式設計的動機是因為想解透過科技解決生活上的問題（例如：想要寫一個記帳 App 給家人使用所以開始學習 Mobile App 開發，你可能需要學習 Android Java/Kotlin 或 iOS
        Swift/Objective-C）或是結合你現有的領域和電腦科學的應用。</p>
      <p>若是你是因為想要轉職成為工程師/程式設計師，這又是另外一個話題。若是這樣，你可以針對你想要學習的領域列出需要學習知識去一一攻克（直接上求職網站把心儀的工作要求做成一個 checklist 清單）。例如：我希望轉職 Web
        前端工程師，我需要具備基本的 HTML/CSS 語法和 JavaScript 程式語言的基礎或是我想轉職資料科學家，我需要具備 Python 或是 R 語言的基礎和理解機器學習和深度學習演算法等。</p>
      <p>當具備正確的學習程式設計心態後，<code>以終為始</code>是學習程式設計最重要的一個環節，這是當你夜深人靜 debug
        不出來時給自己最好的支持動力。事實上，程式語言只是一個創作的工具，你可以想像成設計師素描本和素描筆，雕刻大師的雕刻刀。幸運的是，程式設計只要一台電腦加上網路就可以開始。</p>
      <h1 id="選擇合適的程式語言和工具"><a href="#選擇合適的程式語言和工具" class="headerlink" title="選擇合適的程式語言和工具"></a>選擇合適的程式語言和工具</h1>
      <p>若你是完全的初學者，我們會建議你從以下程式語言開始入手，再一步步針對你有興趣的領域繼續鑽研。</p>
      <p><img src="https://www.happycoder.org/images/python101/scratch-logo.jpg" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <ol>
        <li><a href="https://scratch.mit.edu/" target="_blank" rel="noopener">Scratch</a><br>若是你是國中小學的學員，你可以從 Scratch
          開始。Scratch 是 MIT 麻省理工學院所開發的電腦程式平台，透過拖拉積木的方式可以讓使用者學習電腦程式的邏輯和概念，創造出多媒體或是遊戲應用，蠻適合低年齡層的學員使用。更重要的是 Scratch
          本身是一個全世界的社群平台，你可以分享自己的作品也可以觀摩學習其他人的作品、認識新朋友，教學相長。</li>
      </ol>
      <p><img src="https://www.happycoder.org/images/python101/python-logo.png" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <ol start="2">
        <li><a href="https://www.python.org/" target="_blank" rel="noopener">Python</a><br>若是成人或是想直接學習正式一點程式語言的學生，我們會推薦由
          Python 入手。為什麼是 Python 呢？因為對於初學者來說 Python 是一個簡單易學但又功能強大的程式語言（Python 不僅可以編寫 Web
          網站、桌面應用程式、開發遊戲更是機器學習/深度學習等資料科學應用的重要程式語言）。相較於其他 C/C++ 或是 Java 等程式語言，Python
          相對而言較為簡潔且容易閱讀，此外不用經過編譯（compile）即可以執行程式也對於初學者較為友善。</li>
      </ol>
      <p><img src="https://www.happycoder.org/images/python101/javascript-logo.png" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <ol start="3">
        <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/JavaScript" target="_blank"
            rel="noopener">JavaScript</a><br>Java 和 JavaScript（簡稱
          JS）和名字雖然很像但是卻是兩個不同的程式語言（可以說是熱狗和狗的差別），發展方向和應用層面也有所不同。隨著網際網路和瀏覽器引擎和 Node.js 的發展 JavaScript
          的影響力有增無減。不再局限於瀏覽器的從早期的跑龍套到現在的獨挑大樑，現在不管是 Web 前後端、行動應用程式、桌面應用程式，甚至是深度學習等都可以使用 JavaScript 來開發。若是你想要開發有關 Web
          相關的應用，更是必須學好 JavaScript，對於新手來說可以透過 Web 呈現和分享自己的作品是一個很有成就感的事情。但 JavaScript 技術變化很快，若是有有經驗的導師帶領可以少走許多冤枉路，且學習
          JavaScript 通常需要搭配學習 HTML/CSS 語法。</li>
      </ol>
      <p><img src="https://www.happycoder.org/images/python101/microbit-logo-logo.png" alt="想要自學程式？七個自學程式設計正確的觀念和心態">
      </p>
      <ol start="4">
        <li><a href="https://microbit.org/" target="_blank" rel="noopener">Micro:bit</a><br>Micro Bit（也叫做 BBC Micro
          Bit）是由 BBC 所推出的具備藍牙、光感測器、溫度感測、加速儀等感測器的微電路版，適合對於嵌入式系統和物聯網、創客應用有興趣的讀者。可以使用
          Python、JavaScript、積木式等程式語言自己動手製作機器人或是溫度監控器等有趣應用！</li>
      </ol>
      <h1 id="看書-上課，動手做點東西"><a href="#看書-上課，動手做點東西" class="headerlink" title="看書/上課，動手做點東西"></a>看書/上課，動手做點東西</h1>
      <p>
        學習程式語言最好的方式就是買本你覺得合適入門書或是加入線上/線下課程後，開始動手做點東西。真正做出點什麼東西，去解決生活上的問題才是驗證你是否學會程式語言最重要的指標（就像是學英文一樣，你背誦了很多單字，但從沒開口說過或是無法和國際友人溝通，那即便是多益或是托福考的再高分那也不算是真正學會英文）。和幾個志同道合的朋友一起做專案、參與實習、接案或是參與開放原始碼專案（Open
        source project）都是一個很好的方式。</p>
      <p>學寫程式就像是學習烏克麗麗或是吉他等才藝一樣需要動手練習才會學得好，總而言之就是：</p>
      <p>動手做點東西<br>動手做點東西<br>動手做點東西</p>
      <p>很重要所以講三遍！</p>
      <p><img src="https://www.happycoder.org/images/python101/stackoverflow.png" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <h1 id="學會網路搜尋-Google-大法"><a href="#學會網路搜尋-Google-大法" class="headerlink" title="學會網路搜尋 Google 大法"></a>學會網路搜尋
        Google 大法</h1>
      <p>一般在學習程式設計遇到困難時，最好的解法就是把錯誤訊息或是遇到的問題去 <a href="https://www.google.com/" target="_blank" rel="noopener">Google</a>
        搜尋一下，大部分情況下都可以在網路得到對應的解答。另外，<a href="https://stackoverflow.com/" target="_blank" rel="noopener">Stack Overflow
          程式設計問答網站</a>和 <a href="https://github.com/" target="_blank" rel="noopener">Github 開源程式碼集散地</a>
        也是一個學習的好去處，沒事去逛逛，相信一定會有不少收穫。</p>
      <p><img src="https://www.happycoder.org/images/python101/github.png" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <h1 id="加入社群，尋找戰友"><a href="#加入社群，尋找戰友" class="headerlink" title="加入社群，尋找戰友"></a>加入社群，尋找戰友</h1>
      <p>一個人寫 code 很孤獨，一群人寫 code
        很幸福。在學習寫程式的過程是一條孤獨且漫長的道路，即便是經驗老道的老手也需要和不同領域的人請教，更何況是剛入門的新手。選擇一個友善的自學程式社群加入，可以讓你在學習程式語言的過程中更加順遂，而加入 <a
          href="https://www.facebook.com/groups/HappyCoderOrg" target="_blank" rel="noopener">HappyCoder 自學程式設計學院</a>
        相信是一個很好的選擇。</p>
      <h1 id="學會有禮貌的問問題並紀錄學習心得"><a href="#學會有禮貌的問問題並紀錄學習心得" class="headerlink"
          title="學會有禮貌的問問題並紀錄學習心得"></a>學會有禮貌的問問題並紀錄學習心得</h1>
      <p>當你卡關時你往往會希望尋求協助，但在尋求協助之前可以先自我評估所遇到的問題，可以讓你在問問題時可以更具體讓人明白也可以讓你在 Google
        時可以找到合適關鍵字來搜尋（沒有人有義務一定要回答你的問題，幫助他人釐清問題是個好習慣）。</p>
      <ol>
        <li>你想要做什麼？</li>
        <li>你已經嘗試過什麼方法？</li>
        <li>結果如何？</li>
      </ol>
      <p>以上的問題最好回答可以具體一點。</p>
      <p>例如說：</p>
      <p><code>你想要做什麼？</code>我想在要 Windows 環境下安裝 Python 環境<br><code>你已經嘗試過什麼方法？</code>我已經在 Python
        官方網站下載安裝完成<br><code>結果如何？</code>但我在 cmd 終端機指令中輸入 Python 指令時出現沒有這個指令的錯誤</p>
      <p>又例如說：</p>
      <p><code>你想要做什麼？</code>我想要在瀏覽器中跳出 comfirm 確認的提示框<br><code>你已經嘗試過什麼方法？</code>我打好了 JavaScript
        程式碼，也儲存了<br><code>結果如何？</code>沒看到在瀏覽器成功執行，但在瀏覽器的開發者工具 console 顯示 Uncaught SyntaxError: Invalid or unexpected
        token 錯誤訊息 </p>
      <p>有些時候透過回答這三個問題，問題就自己迎刃而解了。</p>
      <p>有些時候撰寫程式一段時間後腦袋會變鈍或是肩膀頸部緊繃。適當時候休息一下，起身運動或是喝口水和人交談一下，或許回頭再試試就會有靈感也說不一定。</p>
      <p>另外，當你完成一個程式專案或是解掉某個 bug 時，記得可以撰寫成技術文章（若是有心要轉職程式設計領域的同學，經營自己的 Github
        和部落格真的很重要），不但可以豐富自己的專業履歷也可以強化自己的記憶方便未來查找外，更重要的是也可以幫助到下一個跟你遇到同樣問題的人喔！</p>
      <p><img src="https://www.happycoder.org/images/python101/yoda.jpg" alt="想要自學程式？七個自學程式設計正確的觀念和心態"></p>
      <h1 id="尋找導師，持續學習"><a href="#尋找導師，持續學習" class="headerlink" title="尋找導師，持續學習"></a>尋找導師，持續學習</h1>
      <p>不管是在職場工作或是學習程式設計，有好的導師或是 role model
        引導確實可以讓自己少走許多冤枉路和減少時間金錢的浪費。但一開始盡量不要找已經工作十年以上的工程師或是程式設計師（等到你要往架構師或是技術管理者邁進時再去找他們），對於新手來說，兩三年或三五年工作經驗的工程師和程式設計師剛好是個不會太有距離感，導師又能體會新手剛入門會遇到的挫折和煩惱，帶著誠懇和禮貌去尋找你身邊或是社群中願意帶你的導師。不過記得當你離開新手村後，若有機會也可以成為其他人的導師，取之於社群回饋於社群。
      </p>
      <p>俗話說：師父領進門，修行在個人。若你有志於程式設計領域繼續鑽研，那就必須認知到 IT
        行業是一個需要持續精進自我的領域。不管是技術還有如何設計產品、溝通協調、管理專案、撰寫簡潔漂亮的程式碼、設計架構等都需要持續地進修學習，唯有持續保持積極的學習態度和能力才是在這個領域持續保有競爭力的最佳保證。</p>
      <h1 id="總結"><a href="#總結" class="headerlink" title="總結"></a>總結</h1>
      <p>以上我們整理了多年來自學程式設計的經驗，我們也曾花過許多冤枉錢和時間。在這邊分享自學程式設計必備觀念和心態，希望讓所有有自學程式設計需求的朋友，不再徬徨、無助。</p>
      <p>最後複習一下自學程式設計必備觀念和心態：</p>
      <ol>
        <li>確認目標和動機</li>
        <li>選擇合適的程式語言和工具</li>
        <li>看書/上課，動手做點東西</li>
        <li>學會網路搜尋 Google 大法</li>
        <li>加入社群，尋找戰友</li>
        <li>學會有禮貌的問問題並紀錄學習心得</li>
        <li>尋找導師，持續學習</li>
      </ol>
      <p>Happy Coding :)</p>
    </div>
  </div>
</div>

<hr>

@endsection
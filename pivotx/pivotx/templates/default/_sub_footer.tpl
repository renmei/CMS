<div id="secondary2">

    <div class="block">
        [[ include file="`$templatedir`/_sub_about.tpl" ]]

    <h3>[[t]]Tag Cloud[[/t]]</h3>
    [[ tagcloud ]]
    </div>

  <div class="block">
      

        <h3>[[t]]Categories[[/t]]</h3>
      <ul>[[category_list format="<li><a href='%url%'>%display%</a></li>"]]</ul>
    </div>

    <div class="block">
        

    <h3>[[t]]Links[[/t]]</h3>
    [[link_list]]
    </div>

    <div class="block">
      [[ if $pagetype!="search" ]]
            <h3>[[t]]Search[[/t]]</h3>
        [[ search ]]
      [[ /if ]]

    
    </div>

    <div style="clear:both">&nbsp;</div>
</div>
<br />
</body>
</html>
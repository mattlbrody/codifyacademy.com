<br>
<span class="nx">$</span><span class="p">(</span><span class="s1">'a[data-toggle="tab"]'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'shown.bs.tab'</span><span class="p">,</span>
<span class="kd">function</span>
<span class="p">(</span><span class="nx">e</span><span class="p">)</span>
<span class="p">{</span>
<br>
<span class="nx form_padding">e</span><span class="p">.</span><span class="nx">target</span>
<span class="c1">// activated tab</span>
<br>
<span class="nx form_padding">e</span><span class="p">.</span><span class="nx">relatedTarget</span>
<span class="c1">// previous tab</span>
<br>
<span class="p">});</span>
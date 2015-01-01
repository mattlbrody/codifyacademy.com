<span class="nx">$</span><span class="p">(</span><span class="s1">'#myTab a'</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span>
<span class="p">(</span><span class="nx">e</span><span class="p">)</span>
<span class="p">{</span>
<br>
<span class="nx form_padding">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
<br>
<span class="nx form_padding">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">);</span>
<br>
<span class="p">});</span>
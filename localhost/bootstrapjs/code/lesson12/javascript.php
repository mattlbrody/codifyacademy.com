<span class="nx">$</span><span class="p">(</span><span class="s1">'#my-affix'</span><span class="p">).</span><span class="nx">affix</span><span class="p">({</span>
<br>
<span class="nx form_padding">offset</span><span class="o">:</span>
<span class="p">{</span>
<br>
<span class="nx extra_content_padding">top</span><span class="o">:</span>
<span class="mi">100</span>
<br>
<span class="p form_padding">,</span>
<span class="nx">bottom</span><span class="o">:</span>
<span class="kd">function</span>
<span class="p">()</span>
<span class="p">{</span>
<br>
<span class="k extreme_padding">return</span>
<span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">bottom</span>
<span class="o">=</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'.footer'</span><span class="p">).</span><span class="nx">outerHeight</span><span class="p">(</span><span class="kc">true</span><span class="p">));</span>
<br>
<span class="p extra_content_padding">}</span>
<br>
<span class="p form_padding">}</span>
<br>
<span class="p">});</span>
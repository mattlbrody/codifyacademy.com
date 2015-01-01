<br>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'show.bs.modal'</span><span class="p">,</span>
<span class="kd">function</span>
<span class="p">(</span><span class="nx">e</span><span class="p">)</span>
<span class="p">{</span>
<br>
<span class="k form_padding">if</span>
<span class="p">(</span><span class="o">!</span><span class="nx">data</span><span class="p">)</span>
<span class="k">return</span>
<span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span>
<span class="c1">// stops modal from being shown</span>
<br>
<span class="p">});</span>
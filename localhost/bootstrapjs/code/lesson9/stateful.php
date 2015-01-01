<br>
<span class="nt">&lt;button</span>
<span class="na">type=</span><span class="s">"button"</span>
<span class="na">id=</span><span class="s">"loading-example-btn"</span>
<span class="na">data-loading-text=</span><span class="s">"Loading..."</span>
<span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
<br>
<span class="content_color form_padding">Loading state</span>
<br>
<span class="nt">&lt;/button&gt;</span>
<br>
<span class="nt">&lt;script&gt;</span>
<br>
<span class="nx form_padding">$</span><span class="p">(</span><span class="s1">'#loading-example-btn'</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span>
<span class="p">()</span>
<span class="p">{</span>
<br>
<span class="kd extra_content_padding">var</span>
<span class="nx">btn</span>
<span class="o">=</span>
<span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">);</span>
<br>
<span class="nx extra_content_padding">btn</span><span class="p">.</span><span class="nx">button</span><span class="p">(</span><span class="s1">'loading'</span><span class="p">);</span>
<br>
<span class="nx extra_content_padding">$</span><span class="p">.</span><span class="nx">ajax</span><span class="p">(...).</span><span class="nx">always</span><span class="p">(</span><span class="kd">function</span>
<span class="p">()</span>
<span class="p">{</span>
<br>
<span class="nx extreme_padding">btn</span><span class="p">.</span><span class="nx">button</span><span class="p">(</span><span class="s1">'reset'</span><span class="p">);</span>
<br>
<span class="p extra_content_padding">});</span>
<br>
<span class="p form_padding">});</span>
<br>
<span class="nt">&lt;/script&gt;</span>
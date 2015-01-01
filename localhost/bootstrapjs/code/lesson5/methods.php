<br>
<span class="nt">&lt;ul</span>
<span class="na">class=</span><span class="s">"nav nav-tabs"</span>
<span class="na">role=</span><span class="s">"tablist"</span>
<span class="na">id=</span><span class="s">"myTab"</span><span class="nt">&gt;</span>
<br>
<span class="nt form_padding">&lt;li</span>
<span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span>
<span class="na">href=</span><span class="s">"#home"</span>
<span class="na">role=</span><span class="s">"tab"</span>
<span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span><span class="content_color">Home</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<br>
<span class="nt form_padding">&lt;li&gt;&lt;a</span>
<span class="na">href=</span><span class="s">"#profile"</span>
<span class="na">role=</span><span class="s">"tab"</span>
<span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span><span class="content_color">Profile</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<br>
<span class="nt form_padding">&lt;li&gt;&lt;a</span>
<span class="na">href=</span><span class="s">"#messages"</span>
<span class="na">role=</span><span class="s">"tab"</span>
<span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span><span class="content_color">Messages</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<br>
<span class="nt form_padding">&lt;li&gt;&lt;a</span>
<span class="na">href=</span><span class="s">"#settings"</span>
<span class="na">role=</span><span class="s">"tab"</span>
<span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span><span class="content_color">Settings</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<br>
<span class="nt">&lt;/ul&gt;</span>
<br>
<br>
<span class="nt">&lt;div</span>
<span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
<br>
<span class="nt form_padding">&lt;div</span>
<span class="na">class=</span><span class="s">"tab-pane active"</span>
<span class="na">id=</span><span class="s">"home"</span><span class="nt">&gt;</span><span class="content_color">...</span><span class="nt">&lt;/div&gt;</span>
<br>
<span class="nt form_padding">&lt;div</span>
<span class="na">class=</span><span class="s">"tab-pane"</span>
<span class="na">id=</span><span class="s">"profile"</span><span class="nt">&gt;</span><span class="content_color">...</span><span class="nt">&lt;/div&gt;</span>
<br>
<span class="nt form_padding">&lt;div</span>
<span class="na">class=</span><span class="s">"tab-pane"</span>
<span class="na">id=</span><span class="s">"messages"</span><span class="nt">&gt;</span><span class="content_color">...</span><span class="nt">&lt;/div&gt;</span>
<br>
<span class="nt form_padding">&lt;div</span>
<span class="na">class=</span><span class="s">"tab-pane"</span>
<span class="na">id=</span><span class="s">"settings"</span><span class="nt">&gt;</span><span class="content_color">...</span><span class="nt">&lt;/div&gt;</span>
<br>
<span class="nt">&lt;/div&gt;</span>
<br>
<br>
<span class="nt">&lt;script&gt;</span>
<br>
<span class="nx form_padding">$</span><span class="p">(</span><span class="kd">function</span>
<span class="p">()</span>
<span class="p">{</span>
<br>
<span class="nx extra_content_padding">$</span><span class="p">(</span><span class="s1">'#myTab a:last'</span>
<span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
<br>
<span class="p form_padding">});</span>
<br>
<span class="nt">&lt;/script&gt;</span>
<?php include 'header.php';
//kullanıcı adı mail önceden varmı 2 defa olamaz kontrolu



?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script >
    //form serialize kodu
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(5($){$.F.U=5(w){2(!4.K){O(\'U: 2Q E 2R - 2S 2T 1g\');6 4}2(V w==\'5\')w={W:w};3 x=$.2U(4.19(\'1h\'));2(x){x=(x.2V(/^([^#]+)/)||[])[1]}x=x||1a.21.22||\'\';w=$.1r({1i:x,M:4.19(\'1x\')||\'23\',1y:/^2W/i.2X(1a.21.22||\'\')?\'2Y:H\':\'2Z:30\'},w||{});3 y={};4.P(\'I-1z-24\',[4,w,y]);2(y.25){O(\'U: E 26 1s I-1z-24 P\');6 4}2(w.1A&&w.1A(4,w)===H){O(\'U: E 1j 1s 1A 27\');6 4}3 a=4.1B(w.31);2(w.N){w.R=w.N;Q(3 n 1C w.N){2(w.N[n]32 1b){Q(3 k 1C w.N[n])a.9({7:n,8:w.N[n][k]})}G a.9({7:n,8:w.N[n]})}}2(w.1D&&w.1D(a,4,w)===H){O(\'U: E 1j 1s 1D 27\');6 4}4.P(\'I-E-28\',[a,4,w,y]);2(y.25){O(\'U: E 26 1s I-E-28 P\');6 4}3 q=$.1E(a);2(w.M.33()==\'23\'){w.1i+=(w.1i.34(\'?\')>=0?\'&\':\'?\')+q;w.N=J}G w.N=q;3 z=4,Z=[];2(w.1F)Z.9(5(){z.1F()});2(w.1G)Z.9(5(){z.1G()});2(!w.11&&w.12){3 A=w.W||5(){};Z.9(5(a){$(w.12).35(a).13(A,29)})}G 2(w.W)Z.9(w.W);w.W=5(a,b){Q(3 i=0,X=Z.K;i<X;i++)Z[i].36(w,[a,b,z])};3 B=$(\'S:37\',4).1c();3 C=H;Q(3 j=0;j<B.K;j++)2(B[j])C=T;3 D=H;2((B.K&&w.1t!==H)||w.1t||C||D){2(w.2a)$.38(w.2a,1H);G 1H()}G $.39(w);4.P(\'I-E-3a\',[4,w]);6 4;5 1H(){3 j=z[0];2($(\':S[7=E]\',j).K){3b(\'3c: 3d 2b 3e 2c 3f 3g "E".\');6}3 k=$.1r({},$.2d,w);3 s=$.1r(T,{},$.1r(T,{},$.2d),k);3 l=\'3h\'+(1I 3i().3j());3 m=$(\'<1t 3k="\'+l+\'" 7="\'+l+\'" 2e="\'+k.1y+\'" />\');3 o=m[0];m.3l({3m:\'3n\',2f:\'-2g\',2h:\'-2g\'});3 p={1j:0,1d:J,1k:J,3o:0,3p:\'n/a\',3q:5(){},2i:5(){},3r:5(){},3s:5(){4.1j=1;m.19(\'2e\',k.1y)}};3 g=k.2j;2(g&&!$.1J++)$.1l.P("3t");2(g)$.1l.P("3u",[p,k]);2(s.2k&&s.2k(p,s)===H){s.2j&&$.1J--;6}2(p.1j)6;3 q=0;3 r=0;3 u=j.Y;2(u){3 n=u.7;2(n&&!u.1m){w.R=w.R||{};w.R[n]=u.8;2(u.M=="1e"){w.R[7+\'.x\']=j.14;w.R[7+\'.y\']=j.15}}}1n(5(){3 t=z.19(\'12\'),a=z.19(\'1h\');j.1o(\'12\',l);2(j.2l(\'1x\')!=\'2m\')j.1o(\'1x\',\'2m\');2(j.2l(\'1h\')!=k.1i)j.1o(\'1h\',k.1i);2(!w.3v){z.19({3w:\'2n/I-N\',3x:\'2n/I-N\'})}2(k.1K)1n(5(){r=T;16()},k.1K);3 b=[];2o{2(w.R)Q(3 n 1C w.R)b.9($(\'<S M="3y" 7="\'+n+\'" 8="\'+w.R[n]+\'" />\').2p(j)[0]);m.2p(\'1p\');o.2q?o.2q(\'2r\',16):o.3z(\'2s\',16,H);j.E()}3A{j.1o(\'1h\',a);t?j.1o(\'12\',t):z.3B(\'12\');$(b).2t()}},10);3 v=2u;5 16(){2(q++)6;o.2v?o.2v(\'2r\',16):o.3C(\'2s\',16,H);3 c=T;2o{2(r)3D\'1K\';3 d,L;L=o.2w?o.2w.2x:o.2y?o.2y:o.2x;3 f=k.11==\'1L\'||L.1M||$.3E(L);O(\'3F=\'+f);2(!f&&(L.1p==J||L.1p.1N==\'\')){2(--v){q=0;1n(16,1O);6}O(\'3G 2c 3H 1t 3I 3J 2u 3K.\');6}p.1d=L.1p?L.1p.1N:J;p.1k=L.1M?L.1M:L;p.2i=5(a){3 b={\'3L-M\':k.11};6 b[a]};2(k.11==\'3M\'||k.11==\'3N\'){3 h=L.1P(\'1Q\')[0];2(h)p.1d=h.8;G{3 i=L.1P(\'1z\')[0];2(i)p.1d=i.1N}}G 2(k.11==\'1L\'&&!p.1k&&p.1d!=J){p.1k=2z(p.1d)}d=$.3O(p,k.11)}3P(e){c=H;$.3Q(k,p,\'2A\',e)}2(c){k.W(d,\'W\');2(g)$.1l.P("3R",[p,k])}2(g)$.1l.P("3S",[p,k]);2(g&&!--$.1J)$.1l.P("3T");2(k.2B)k.2B(p,c?\'W\':\'2A\');1n(5(){m.2t();p.1k=J},1O)};5 2z(s,a){2(1a.2C){a=1I 2C(\'3U.3V\');a.3W=\'H\';a.3X(s)}G a=(1I 3Y()).3Z(s,\'1R/1L\');6(a&&a.2D&&a.2D.1u!=\'40\')?a:J}}};$.F.41=5(f){6 4.2E().2F(\'E.I-1v\',5(){$(4).U(f);6 H}).2F(\'2G.I-1v\',5(e){3 a=e.12;3 b=$(a);2(!(b.42(":E,S:1e"))){3 t=b.43(\':E\');2(t.K==0)6;a=t[0]}3 c=4;c.Y=a;2(a.M==\'1e\'){2(e.2H!=17){c.14=e.2H;c.15=e.44}G 2(V $.F.2I==\'5\'){3 d=b.2I();c.14=e.2J-d.2h;c.15=e.2K-d.2f}G{c.14=e.2J-a.45;c.15=e.2K-a.46}}1n(5(){c.Y=c.14=c.15=J},1O)})};$.F.2E=5(){6 4.47(\'E.I-1v 2G.I-1v\')};$.F.1B=5(b){3 a=[];2(4.K==0)6 a;3 c=4[0];3 d=b?c.1P(\'*\'):c.2b;2(!d)6 a;Q(3 i=0,X=d.K;i<X;i++){3 e=d[i];3 n=e.7;2(!n)1S;2(b&&c.Y&&e.M=="1e"){2(!e.1m&&c.Y==e){a.9({7:n,8:$(e).2L()});a.9({7:n+\'.x\',8:c.14},{7:n+\'.y\',8:c.15})}1S}3 v=$.1c(e,T);2(v&&v.1w==1b){Q(3 j=0,2M=v.K;j<2M;j++)a.9({7:n,8:v[j]})}G 2(v!==J&&V v!=\'17\')a.9({7:n,8:v})}2(!b&&c.Y){3 f=$(c.Y),S=f[0],n=S.7;2(n&&!S.1m&&S.M==\'1e\'){a.9({7:n,8:f.2L()});a.9({7:n+\'.x\',8:c.14},{7:n+\'.y\',8:c.15})}}6 a};$.F.48=5(a){6 $.1E(4.1B(a))};$.F.49=5(b){3 a=[];4.13(5(){3 n=4.7;2(!n)6;3 v=$.1c(4,b);2(v&&v.1w==1b){Q(3 i=0,X=v.K;i<X;i++)a.9({7:n,8:v[i]})}G 2(v!==J&&V v!=\'17\')a.9({7:4.7,8:v})});6 $.1E(a)};$.F.1c=5(a){Q(3 b=[],i=0,X=4.K;i<X;i++){3 c=4[i];3 v=$.1c(c,a);2(v===J||V v==\'17\'||(v.1w==1b&&!v.K))1S;v.1w==1b?$.4a(b,v):b.9(v)}6 b};$.1c=5(b,c){3 n=b.7,t=b.M,1f=b.1u.1T();2(V c==\'17\')c=T;2(c&&(!n||b.1m||t==\'1q\'||t==\'4b\'||(t==\'1U\'||t==\'1V\')&&!b.1W||(t==\'E\'||t==\'1e\')&&b.I&&b.I.Y!=b||1f==\'18\'&&b.1X==-1))6 J;2(1f==\'18\'){3 d=b.1X;2(d<0)6 J;3 a=[],1Y=b.4c;3 e=(t==\'18-2N\');3 f=(e?d+1:1Y.K);Q(3 i=(e?d:0);i<f;i++){3 g=1Y[i];2(g.1g){3 v=g.8;2(!v)v=(g.1Z&&g.1Z[\'8\']&&!(g.1Z[\'8\'].4d))?g.1R:g.8;2(e)6 v;a.9(v)}}6 a}6 b.8};$.F.1G=5(){6 4.13(5(){$(\'S,18,1Q\',4).2O()})};$.F.2O=$.F.4e=5(){6 4.13(5(){3 t=4.M,1f=4.1u.1T();2(t==\'1R\'||t==\'4f\'||1f==\'1Q\')4.8=\'\';G 2(t==\'1U\'||t==\'1V\')4.1W=H;G 2(1f==\'18\')4.1X=-1})};$.F.1F=5(){6 4.13(5(){2(V 4.1q==\'5\'||(V 4.1q==\'4g\'&&!4.1q.4h))4.1q()})};$.F.4i=5(b){2(b==17)b=T;6 4.13(5(){4.1m=!b})};$.F.1g=5(b){2(b==17)b=T;6 4.13(5(){3 t=4.M;2(t==\'1U\'||t==\'1V\')4.1W=b;G 2(4.1u.1T()==\'2P\'){3 a=$(4).4j(\'18\');2(b&&a[0]&&a[0].M==\'18-2N\'){a.4k(\'2P\').1g(H)}4.1g=b}})};5 O(){2($.F.U.4l&&1a.20&&1a.20.O)1a.20.O(\'[4m.I] \'+1b.4n.4o.4p(29,\'\'))}})(4q);',62,275,'||if|var|this|function|return|name|value|push|||||||||||||||||||||||||||||||submit|fn|else|false|form|null|length|doc|type|data|log|trigger|for|extraData|input|true|ajaxSubmit|typeof|success|max|clk|callbacks||dataType|target|each|clk_x|clk_y|cb|undefined|select|attr|window|Array|fieldValue|responseText|image|tag|selected|action|url|aborted|responseXML|event|disabled|setTimeout|setAttribute|body|reset|extend|via|iframe|tagName|plugin|constructor|method|iframeSrc|pre|beforeSerialize|formToArray|in|beforeSubmit|param|resetForm|clearForm|fileUpload|new|active|timeout|xml|XMLDocument|innerHTML|100|getElementsByTagName|textarea|text|continue|toLowerCase|checkbox|radio|checked|selectedIndex|ops|attributes|console|location|href|GET|serialize|veto|vetoed|callback|validate|arguments|closeKeepAlive|elements|not|ajaxSettings|src|top|1000px|left|getResponseHeader|global|beforeSend|getAttribute|POST|multipart|try|appendTo|attachEvent|onload|load|remove|50|detachEvent|contentWindow|document|contentDocument|toXml|error|complete|ActiveXObject|documentElement|ajaxFormUnbind|bind|click|offsetX|offset|pageX|pageY|val|jmax|one|clearFields|option|skipping|process|no|element|trim|match|https|test|javascript|about|blank|semantic|instanceof|toUpperCase|indexOf|html|apply|file|get|ajax|notify|alert|Error|Form|must|be|named|jqFormIO|Date|getTime|id|css|position|absolute|status|statusText|getAllResponseHeaders|setRequestHeader|abort|ajaxStart|ajaxSend|skipEncodingOverride|encoding|enctype|hidden|addEventListener|finally|removeAttr|removeEventListener|throw|isXMLDoc|isXml|Could|access|DOM|after|tries|content|json|script|httpData|catch|handleError|ajaxSuccess|ajaxComplete|ajaxStop|Microsoft|XMLDOM|async|loadXML|DOMParser|parseFromString|parsererror|ajaxForm|is|closest|offsetY|offsetLeft|offsetTop|unbind|formSerialize|fieldSerialize|merge|button|options|specified|clearInputs|password|object|nodeType|enable|parent|find|debug|jquery|prototype|join|call|jQuery'.split('|'),0,{}))



</script>

<script>
function ekle(sayfa,form_eleman,messaga){
var form = jQuery(form_eleman);
sc = form.formSerialize();//eger bunu kullanmazsan formu elle yazarsın amacı beliritn formdaki verileri almaktır
$.ajax({
type: "POST",
url: "ajax/" + sayfa,
data: sc,
cache: false,
success: function(msg){
if (msg=='ok')   {

jQuery(form_eleman).resetForm();
$("#msg_box_warning").hide("fast");
$("#msg_box_ok").show("fast");
$("#msg_box_owrite").html(messaga);

}
else {
$("#msg_box_ok").hide("fast");
$("#msg_box_warning").show("fast");
$("#msg_box_wwrite").html(msg);
}}})


;}

</script>

<div class="wrapper">
<div class="container">
    <div id="msg_box_warning" style="display: none"><span id="msg_box_wwrite"></span></div>
    <div id="msg_box_ok" style="display: none"><span id="msg_box_owrite"></span></div>
    <div class="inner">
        <div class="innerTop">
            <span>ÜYE OLUN</span>
        </div>
        <div class="innerLeft">
            <p>Adı</p>
            <p>Soyadı</p>
            <p>Kullanıcı adı</p>
            <p>Parola</p>
            <p>Parola Tekrar</p>
            <p>İl</p>
            <p>İlçe</p>
            <p>Telefon</p>
            <p>E-mail adresi</p>
            <p>Cinsiyeti</p>
        </div>
        <form method="post"  action="javascript:void(0);" id="news_add">
        <div class="innerRight">
            <div class="inputLayer"> <input name="ad" type="text"/></div>
            <div class="inputLayer"> <input name="soyad" type="text"/></div>
            <div class="inputLayer"> <input name="kullanici-ad" type="text"/></div>
            <div class="inputLayer"> <input name="parola" type="text"/></div>
            <div class="inputLayer"> <input name="parola2" type="text"/></div>
            <div class="inputLayer">
                <select name="city" id="cityId" >
                    <option value="Ankara">Ankara</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                </select>
            </div>
            <div class="inputLayer">
                <select name="town" id="townId">
                    <option value="Ankara">Ankara</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                </select>
            </div>
            <div class="inputLayer"><input name="telefon" type="text"/></div>
            <div class="inputLayer"><input name="email" type="text"/></div>
            <div class="inputLayer"><input name="cinsiyet" type="text"/></div>
        </div>
            <input type="submit" name="submit" value="Kaydet" class="kaydet_btn"
                   onclick="ekle('ekle.php','#news_add','Bilgileriniz Basari ile Kayit edilmistir');">
        <p class="terms">Üyelik Kosulları ve Gizlilik</p>
    </div>
    </form>
</div>
</div>
</body></html>
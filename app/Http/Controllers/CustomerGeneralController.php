<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\ProductExtra;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerGeneralController extends Controller
{
    public function welcome(Request $request){
        $data=[];
        $data['collection']=Master::getdetails('collection',6)->get();
        $data['occasion']=Master::getdetails('occasion',6)->get();
        $data['category']=Master::getdetails('category',2)->get();
        $data['newarrivals']=Products::getdetails(1)->take(8)->where('created_at','>=',date('Y-m-d',strtotime('-2weeks')))->get();
        $data['distcountproducts']=Products::getdetails(1)->take(8)->where('pricing->disa', '>' ,'0')->get();
        $data['product']=Products::getdetails(1)->take(8)->get();
        return view('Customer.General.home',['data'=>$data]);
    }
    public function getsearch($request,$typedata=null){
        $x=[];
        $x['name']=$request->name??'';
        $x['showoutofstock']=$request->showoutofstock??1;
        $x['fabric']=$request->fabric??[];
        $x['colour']=$request->colour??[];
        $x['category']=$request->category??[];
        $x['emblishment']=$request->emblishment??[];
        $x['technique']=$request->technique??[];
        $x['occasion']=$request->occasion??[];
        $x['collection']=$request->collection??[];
        $x['pattern']=$request->pattern??[];
        $x['minprice']=$request->price[0]??0;
        $x['maxprice']=$request->price[1]??0;
        $x['orderby']=$request->orderby??0;
        return Products::search($x,$typedata)->paginate(20);
    }
    public function getsearchdata(Request $request){
        return $this->getsearch($request);
    }



    public function search(Request $request){
        $data=$this->getsearch($request);
        $options=[];
        $options['name']=$request->name??'';
        $options['collection']=Master::getdetails('collection',0)->get();
        $options['category']=Master::getdetails('category',0)->get();
        $options['occasion']=Master::getdetails('occasion',0)->get();
        $options['tags']=Master::getdetails('tags',0)->get();
        $options['fabric']=Master::getdetails('fabric',0)->get();
        $options['pattern']=Master::getdetails('pattern',0)->get();
        $options['emblishment']=Master::getdetails('emblishment',0)->get();
        $options['technique']=Master::getdetails('technique',0)->get();
        $options['colour']=Master::getdetails('colour',0)->get();
        $options['minprice']= $data->min('nettotal');
        $options['maxprice']= $data->max('nettotal');

        $typedata=[];
        $typedata['name']='search';
        $typedata['id']=null;
        $typedata['value']=null;
        $typedata['url']="/searchdata/".$request->name;
        return view('Customer.General.search',['data'=>$data,'options'=>$options,'typedata'=>$typedata]);
    }

    public function getcolldata(Request $request,$namex){
        $datax=Master::where('type','category')->where('data->slugurl',$namex)->first();
        // return $datax;
        $typedata=[];
        $typedata['name']='collection';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$namex;
        $typedata['url']="/collection/".$namex;
        // return $typedata;
        return $this->getsearch($request,$typedata);
    }
    public function collectionsearch(Request $request,$namex){
        $datax=Master::where('type','collection')->where('data->slugurl',$namex)->first();
        $typedata=[];
        $typedata['name']='collection';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$namex;
        $typedata['url']="/collection/".$namex;

        $data=$this->getsearch($request,$typedata);
        $options=[];
        $options['name']=$request->name??'';
        $options['collection']=Master::getdetails('collection',0)->get();
        $options['category']=Master::getdetails('subcategory',0)->get();
        $options['occasion']=Master::getdetails('occasion',0)->get();
        $options['tags']=Master::getdetails('tags',0)->get();
        $options['fabric']=Master::getdetails('fabric',0)->get();
        $options['pattern']=Master::getdetails('pattern',0)->get();
        $options['emblishment']=Master::getdetails('emblishment',0)->get();
        $options['technique']=Master::getdetails('technique',0)->get();
        $options['colour']=Master::getdetails('colour',0)->get();
        $options['minprice']= $data->min('nettotal');
        $options['maxprice']= $data->max('nettotal');

        return view('Customer.General.search',['data'=>$data,'options'=>$options,'typedata'=>$typedata]);
    }








    public function getoccdata(Request $request,$name){
        $datax=Master::where('type','category')->where('data->slugurl',$name)->first();
        // return $datax;
        $typedata=[];
        $typedata['name']='occasion';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$name;
        $typedata['url']="/occasion/".$name;
        // return $typedata;
        return $this->getsearch($request,$typedata);
    }
    public function occasionsearch(Request $request,$name){
        $datax=Master::where('type','category')->where('data->slugurl',$name)->first();
        // return $datax;
        $data=$this->getsearch($request);
        $options=[];
        $options['name']=$request->name??'';
        $options['collection']=Master::getdetails('collection',0)->get();
        $options['category']=Master::getdetails('subcategory',0)->get();
        $options['occasion']=Master::getdetails('occasion',0)->get();
        $options['tags']=Master::getdetails('tags',0)->get();
        $options['fabric']=Master::getdetails('fabric',0)->get();
        $options['pattern']=Master::getdetails('pattern',0)->get();
        $options['emblishment']=Master::getdetails('emblishment',0)->get();
        $options['technique']=Master::getdetails('technique',0)->get();
        $options['colour']=Master::getdetails('colour',0)->get();
        $options['minprice']= $data->min('nettotal');
        $options['maxprice']= $data->max('nettotal');
// return $options;
        $typedata=[];
        $typedata['name']='occasion';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$name;
        $typedata['url']="/occasion/".$name;
        return view('Customer.General.search',['data'=>$data,'options'=>$options,'typedata'=>$typedata]);
    }




    public function getcatdata(Request $request,$name){
        $datax=Master::where('type','category')->where('data->slugurl',$name)->first();
        // return $datax;
        $typedata=[];
        $typedata['name']='category';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$name;
        $typedata['url']="/category/".$name;
        return $typedata;
        return $this->getsearch($request,$typedata);
    }
    public function categorysearch(Request $request,$name){
        $datax=Master::where('type','category')->where('data->slugurl',$name)->first();
        // return $datax;
        $data=$this->getsearch($request);
        $options=[];
        $options['name']=$request->name??'';
        $options['collection']=Master::getdetails('collection',0)->get();
        $options['category']=Master::getdetails('subcategory',0)->get();
        $options['occasion']=Master::getdetails('occasion',0)->get();
        $options['tags']=Master::getdetails('tags',0)->get();
        $options['fabric']=Master::getdetails('fabric',0)->get();
        $options['pattern']=Master::getdetails('pattern',0)->get();
        $options['emblishment']=Master::getdetails('emblishment',0)->get();
        $options['technique']=Master::getdetails('technique',0)->get();
        $options['colour']=Master::getdetails('colour',0)->get();
        $options['minprice']= $data->min('nettotal');
        $options['maxprice']= $data->max('nettotal');
// return $options;
        $typedata=[];
        $typedata['name']='category';
        $typedata['id']=$datax->id;
        $typedata['value']=$datax->data['name'];
        $typedata['slugurl']=$name;
        $typedata['url']="/category/".$name;
        return view('Customer.General.search',['data'=>$data,'options'=>$options,'typedata'=>$typedata]);
    }


    public function cartmanage(Request $request){
        $userid=$request->session()->get('uid');
        return ProductExtra::manage($userid,$request);
    }
    public function wishlistmanage(Request $request){
        $userid=$request->session()->get('uid');
        return ProductExtra::managewishlist($userid,$request);
    }
    public function productview($name){
        $data=Products::prodview()->where('data->slugurl',$name)->where('status',1)->first();
        if(!$data){
            return redirect('/');
        }
        return view('Customer.General.producthome',['data'=>$data]);
    }
    public function productcheck($name){
        $data=Products::where('data->slugurl',$name)->first();
        return $data;
        if(!$data){
            return redirect('/');
        }

        return view('Customer.General.producthome',['data'=>$data]);
    }








    public function cart(Request $request){
        $data= ProductExtra::where('type',0)->with('product')->get();
        return view('Customer.General.cart',['data'=>$data]);
    }












    public function generalpages(Request $request,$name){
        $data=Master::where('type','CMS')->where('data->name',$name)->first();
        if(!$data){
            return redirect('/');
        }

        return view('Customer.General.generalpages',['data'=>$data]);
    }
    public function collection()
    {
        $xdata=[];
        $xdata['title']='Collection';
        $xdata['url']='/collection';

        $xdata['link']='/collection';
        $data = Master::where('name', 'collection')->where('status',1)->get();
        // return $data;
        return view('sri_collection', ['data' => $data,'xdata'=>$xdata]);
    }
    public function category()
    {
        $xdata=[];

        $xdata['title']='Category';
        $xdata['url']='/category';
        // return $xdata;
        // $xdata['link']='/category';
        $data = Master::where('name', 'category')->where('status',1)->get();
        // return $data ;
        return view('sri_collection', ['data' => $data,'xdata'=>$xdata]);
    }
    public function occasion()
    {
        $xdata=[];
        $xdata['title']='Occasion';
        $xdata['url']='/occasion';

        $xdata['link']='/occasion';
        $data = Master::where('name', 'occasion')->where('status',1)->get();
        // return $data;
        return view('sri_collection', ['data' => $data,'xdata'=>$xdata]);
    }
 public function settingview($id)
 {
    $data=User::find($id);
    return $data;
    return view('king.setting_view',['data'=>$data]);
 }
public function settingedit()
{
    $xdata=[];
    $xdata['title']='Name';
    $xdata['url']='/name';

    $xdata['link']='/name';
    $data = Master::get();
    // return $data;
    return view('king.name_edit', ['data' => $data,'xdata'=>$xdata]);
}
public function cartlist(Request $request)
{
    $json=[];
    $json['total']=$request->total??0;
    $json['subtotal']=$request->subtotal??0;
    $json['taxtotal']=$request->taxtotal??0;
    $json['discount']=$request->discount??0;
    $json['name']=json_decode($request->name)??[];
    $json['slugurl']=json_decode($request->slugurl)??[];
    $json['image']=json_decode($request->image)??[];
    $json['id']=json_decode($request->id)??[];
    $json['qty']=json_decode($request->qty)??[];
    $json['disp']=json_decode($request->disp)??[];
    $json['disa']=json_decode($request->disa)??[];
    $json['taxp']=json_decode($request->taxp)??[];
    $json['taxa']=json_decode($request->taxa)??[];
    $json['baseprice']=json_decode($request->baseprice)??[];
    $json['nettotal']=json_decode($request->nettotal)??[];
    $json['weight']=json_decode($request->weight)??[];
    $json['wgunit']=json_decode($request->wgunit)??[];
    $json['subtotalprod']=json_decode($request->subtotalprod)?? [];
    $json['taxtotalprod']=json_decode($request->taxtotalprod)??[];

return $json;



}

}

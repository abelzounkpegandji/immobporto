<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajouter une nouvelle catégorie
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.categories')}}" class="btn btn-success pull-rigth">Toutes les catégories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif 
                        <form class="form-horizontal" wire:submit.prevent="storeCategorie">
                            <div class="form-group">
                                <label class="com-md-4 control-label">Nom Catégorie</label>
                                <div class="col-md-4">
                                    <input type="text" placeholholder="Nom catégorie" class="form-control input-md" wire:model="name" wire:keyup="genarateslug" />
                                </div>
                             </div>

                             <div class="form-group">
                                <label class="com-md-4 control-label">Slug Catégorie</label>
                                <div class="col-md-4">
                                    <input type="text" placeholholder="Slug catégorie" class="form-control input-md" wire:model="slug"/>
                                </div>
                             </div>


                             <div class="form-group">
                                <label class="com-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                             </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

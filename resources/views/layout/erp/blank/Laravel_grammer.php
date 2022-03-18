
--------------  Template customize ----------------
// Master page
1.  {{asset()}} - (for master page css,js add)
2.  @include() - (for masterpage and sub masterpage add)
3.  @yeild() - (content page add)

// content page
1.  @extends() - (kon page a page show hoba seti add korta hoba)
2.  @section() (content koto tuku show korba seti section a bolta hoba and section close korta hoba)
3. @endsection
--------------------------END----------------------

        ------------ Library function use (page) ----------------------
            ************Anchor******************
1.  {{url('/')}} - (link create korar jonno j route a link create korta hoba ta / ar por dita hoba) 
            ************End Anchor******************
            ************Form******************
2.  {{route('users.store')}} -(action ar jonno route(form) ar link ar jonno url use korta hoba )
3.  @method("DELETE") - (delete ar jonno use korta hoba)
4. {route('users.update',$user->id)}} - (edit and delete ar jonoo avaba parameter pass korta hoba)
    @method("PUT")
5.  @csrf - (hidden token pathano ar jonno(form a use hoi))
            ***********Form*********************
6.  @foreach($roles as $role) - ( foreach loop)
    @endforeach

7.   @forelse ($users as $user) - (foreach and forelse loop ar kaj ak e but forelse loop use kora hoi table a data na thakla o custom content show kora jai)
     @empty (page empty hola warning ar jonno)
     @endforelse
            --------------------------END----------------------

            -------------------------- Route-> Web ----------------------
            --------------------------END----------------------

            -------------------------- App -> Http -> Controller ----------------------
                    ********** Database *************
                1.  BD::    (scope rejulation ar por select,insert,update,delete hoba)

                1.  select('select example from where r.id=u.role_id'); ->(Database table ar record webpage a show ar jonno)
                2.  insert("insert into elample() values()); ->(Database table a record store ar jonno)
                3.  update("update example set where id='$id'"); ->(Database table ar record update korar jonno)
                4.  delete("delete from example where id={$id}"); ->(Database table ar record delete ar jonno)
                    ************ End Databse *************
            --------------------------END----------------------
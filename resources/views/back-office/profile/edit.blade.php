@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner mt-8">

                        <div class="nftmax-personals">
                            <h2 class="nftmax-personals__title">Personal Info</h2>
                            <div class="row flex items-center justify-center">
                                <div class="col-lg-9 col-md-10 col-12  nftmax-personals__content">
                                    <div class="nftmax-ptabs__inner">
                                        <div class="tab-content" id="nav-tabContent">
                                            <!--  Features Single Tab -->
                                            <div class="tab-pane fade show active" id="id1" role="tabpanel">
                                                <form action="{{ route('profile.update', Auth::user()->id) }} "
                                                    method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="nftmax-ptabs__separate flex  justify-center">
                                                                <div class="nftmax-ptabs__form-main w-[80%]">
                                                                    <div class="nftmax__item-form--group">
                                                                        <div class="row">
                                                                            <div class="nftmax__item-form--group">
                                                                                <label class="nftmax__item-label">Full
                                                                                    Name </label>
                                                                                <input class="nftmax__item-input"
                                                                                    value="{{ Auth::user()->name }}"
                                                                                    type="text" name="name">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">Email
                                                                        </label>
                                                                        <input class="nftmax__item-input" type="email"
                                                                            value="{{ Auth::user()->email }}"
                                                                            name="email">

                                                                    </div>
                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">Password
                                                                        </label>
                                                                        <input class="nftmax__item-input"
                                                                            type="password"
                                                                            value="{{ Auth::user()->password }}"
                                                                            name="password">

                                                                    </div>
                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">Nationality
                                                                        </label>
                                                                        <input class="nftmax__item-input" type="text"
                                                                            value="{{ Auth::user()->nationality }}"
                                                                            name="nationality">
                                                                    </div>
                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">Field
                                                                        </label>
                                                                        <select class="nftmax__item-input"
                                                                            name="field">
                                                                            <option value="visual">Visual Artists
                                                                            </option>
                                                                            <option value="performing">Performing
                                                                                Artists</option>
                                                                            <option value="literary">Literary Artists:
                                                                            </option>
                                                                            <option value="multimedia">Digital and
                                                                                Multimedia Artists</option>
                                                                            <option value="graffiti">Street and Graffiti
                                                                                Artists</option>

                                                                        </select>

                                                                    </div>
                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">Bio
                                                                        </label>
                                                                        <textarea name="bio" class="nftmax__item-input nftmax__item-textarea" type="text" required="required">{{ Auth::user()->bio }}</textarea>
                                                                    </div>


                                                                </div>
                                                                <div class="nftmax-ptabs__form-update">
                                                                    <div class="nftmax-ptabs__sidebar">
                                                                        <div
                                                                            class="nftmax-ptabs__ssingle nftmax-ptabs__srofile">
                                                                            <div class="nftmax-ptabs__sheading">
                                                                                <h4 class="nftmax-ptabs__stitle">
                                                                                    Update Profile picture</h4>
                                                                               
                                                                            </div>
                                                                            <div class="nftmax-ptabs__sauthor">
                                                                                <div
                                                                                    class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb">
                                                                                    <label for="image"><span
                                                                                            class="nftmax-ptabs__sedit"><svg
                                                                                                width="32"
                                                                                                height="32"
                                                                                                viewBox="0 0 32 32"
                                                                                                fill="none"
                                                                                                >
                                                                                                
                                                                                                <path
                                                                                                    d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                                                                    fill="white">
                                                                                                </path>
                                                                                            </svg></span></label>
                                                                                    <input type="file" name="image"
                                                                                        id="image" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nftmax-ptabs__ssingle nftmax-ptabs__scover">
                                                                            <div class="nftmax-ptabs__sheading">
                                                                                <h4
                                                                                    class="nftmax-ptabs__stitle nftmax-ptabs__stitle--update">
                                                                                    Update Cover </h4>
                                                                               
                                                                            </div>
                                                                            <div class="nftmax-ptabs__sauthor">
                                                                                <div
                                                                                    class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb">
                                                                                  
                                                                                    <label for="cover"><span
                                                                                            class="nftmax-ptabs__sedit"><svg
                                                                                                width="32"
                                                                                                height="32"
                                                                                                viewBox="0 0 32 32"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                                                                                    fill="white">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                                                                    fill="white">
                                                                                                </path>
                                                                                            </svg></span></label>
                                                                                    <input id="cover"
                                                                                        type="file"
                                                                                        name="cover" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nftmax__item-button--group nftmax__ptabs-bottom">
                                                        <button
                                                            class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius nftmax-item__btn"
                                                            type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')

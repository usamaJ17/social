
                   <form id="email-form" action="{{ route('verification.resend') }}" method="POST" >
                            @csrf
                        </form>
                        
                        <script>
                            
                            function sendm()
                            {
                                document.getElementById('email-form').submit();
                                
                            }
                            
                            function redirect_email()
                            {
                                
                                window.location = "https://contrafinder.com/email/verify";
                                
                            }
                            
                          
                            setTimeout(sendm,500);
                            setTimeout(redirect_email,2000);
                            
                        </script>
                        

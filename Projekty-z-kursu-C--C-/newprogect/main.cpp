#include <iostream>

using namespace std;

 int uczniowie,cukierki,x,y;
int main()
{
    cout << "Ilu uczniow jest w Twojej klasie: ";
    cin>>uczniowie;
    cout<<"Ile cukierk� zakupi�� twoja mama: " ;
    cin>>cukierki;

    x=cukierki/(uczniowie-1);

    cout<<"Cukierkow dla kazdego  ucznia: "<<x;

    y=cukierki-x*(uczniowie-1);
    cout<<endl<<"Dla Jasia na wieczor: "<<y;
    return 0;
}

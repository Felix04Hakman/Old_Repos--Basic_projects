#include <iostream>
#include<cstdlib>
#include<time.h>
using namespace std;
int liczba,  strzal;
int main()
{
    cout<<"Witaj! Podaj liczbê  1..100"<<endl;
    srand(time(NULL));
    liczba = rand()%100+1;
    cout<<liczba<<endl;
    while(strzal!=liczba)
    {
        cout<<"Zgdanij jaka: ";
        cin>>strzal;

        if(strzal==liczba)
            cout<<"Udalo sie!Wygrywasz" <<endl;
         if(strzal<liczba)
            cout<<"To za malo" <<endl;
           else if(strzal>liczba)
            cout<<"To za  duzo" <<endl;
    }
    return 0;
}

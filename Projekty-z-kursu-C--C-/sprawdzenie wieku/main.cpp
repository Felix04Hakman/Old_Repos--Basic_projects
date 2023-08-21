#include <iostream>

using namespace std;
int wiek;
int main()
{
    cout << "Ile masz lat: ";
    cin>>wiek;

    if(wiek>=18)
    {
        cout<<"Jestes pelnoletni";
    }
    else if ((wiek>=18)&& (wiek<35))
    {
     cout<<"Jestes pelnoletni ale  nie mozesz zostac prezydentem ";
    }
    else
    {
        cout<<"Jestes niepelnoletni";
    }
    if(wiek>=35)
        {
        cout<<"Mozesz kandydatowac na prezydenta";
    }
    else
    {
        cout<<"Nie mozesz kandydatowac na prezydenta";
    }
    return 0;
}

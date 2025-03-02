import java.util.*;
class Array{
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.println("size of array ");
        int n=sc.nextInt();
        int arr=new int[n];
        System.out.println("enter the element of array:");
        int i=0;
        while(i<n){
            int arr[i]=sc.nextInt();
            i++;
        }

    }

    public static int maximum(int arr){
        int i=0;
        int max=arr[0];
        while(i< arr.length){
            if(arr[i]>max){
                max=arr[i];
            }
        }

        return max;

    }
}
class Selection_sort{
    public static void main(String[] args){
        int[] arr={5,5,9,6,2,4,8,6,,17,2};
        for(int i=0;i<n-1;i++){
            int min=i;
            for(int j=i+1;j<n-1;j++){
                if(arr[j]<arr[min]){
                    min=j;
                }
            }
            //swap
            int temp=arr[i];
            arr[i]=arr[min];
            arr[j]=temp;
        }

        // return arr
    }
}
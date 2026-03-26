export type Article = {
  id: number;
  title: string;
  content: string;
  slug: string;
  views_count: number;
  image: string | null;
  is_featured: boolean;
  published_at: string | null;
  created_at?: string;
  updated_at?: string;
};

export type PaginationLink = {
  url: string;
  label: string;
  page?: number | null;
  active: boolean;
}

export type Pagination<T> = {
  current_page: number;
  data: T[];
  first_page_url: string;
  from: number | null;
  last_page: number;
  last_page_url: string | null;
  links: PaginationLink[];
  next_page_url: string | null;
  path: string;
  per_page: number;
  prev_page_url: null;
  to: number | null;
  total: number;
};

export type ArticlePagination = Pagination<Article>;
